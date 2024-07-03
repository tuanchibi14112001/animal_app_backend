<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\AnimalBreed;
use App\Models\Favourite;
use App\Models\Gallery;
use App\Utilities\Constant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    public $url = Constant::BASE_URL;
    /**
     * Create User
     * @param Request $request
     * @return User 
     */
    public function createUser(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make(
                $request->all(),
                [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 200);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            return response()->json([
                'status' => true,
                'message' => 'User Created Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 200);
        }
    }

    /**
     * Login The User
     * @param Request $request
     * @return User
     */
    public function loginUser(Request $request)
    {
        try {
            $validateUser = Validator::make(
                $request->all(),
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 200);
            }

            if (!Auth::attempt($request->only(['email', 'password']))) {
                return response()->json([
                    'status' => false,
                    'message' => 'Email & Password does not match with our record.',
                ], 200);
            }

            $user = User::where('email', $request->email)->first();

            return response()->json([
                'status' => true,
                'message' => 'User Logged In Successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function getGallery(Request $request)
    {
        $user_id = $request->user()->id;
        $query = Gallery::where('user_id', $user_id)->where('is_deleted', 0)->groupBy('animal_specie_name')
            ->selectRaw('count(*) as total, animal_specie_name')
            ->orderBy('animal_specie_name')
            ->get();
        foreach ($query as $species) {
            $animalImage = Gallery::where('user_id', $user_id)->where('is_deleted', 0)->where('animal_specie_name', $species['animal_specie_name'])->orderBy('id', 'DESC')->first();
            $img_url =  $animalImage['img_url'];
            $species['img_url'] = $this->url . "/uploads/gallery/$user_id/" . $img_url;
        }
        return $query;
    }

    public function getGallerybyFamilyName(Request $request)
    {
        $user_id = $request->user()->id;
        $animal_specie_name = $request->animal_specie_name;
        $query = Gallery::where('user_id', $user_id)->where('is_deleted', 0)->where('animal_specie_name', $animal_specie_name)->orderBy('id', 'DESC')->get();
        foreach ($query as $family) {
            $img_url = $family['img_url'];
            $family['img_url'] = $this->url . "/uploads/gallery/$user_id/" . $img_url;
        }
        return $query;
    }

    public function storeImage(Request $request)
    {
        $user_id = $request->user()->id;
        $animal_specie_name = ucfirst($request->animal_specie_name);
        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/gallery/' . $user_id;
            $file->move($path, $filename);

            $gallery = new Gallery;
            $gallery->user_id = $user_id;
            $gallery->animal_specie_name  = $animal_specie_name;
            $gallery->img_url = $filename;
            $gallery->is_deleted = 0;
            $result = $gallery->save();
            if ($result)
                return response()->json([
                    'status' => true,
                    'result' => "Image uploaded successfully",
                ], 200);
            else {
                return response()->json([
                    'status' => false,
                    'result' => "Error uploading image",
                ], 200);
            }
        }
        return response()->json([
            'status' => false,
            'result' => "Error uploading image",
        ], 200);
    }

    public function deleteImage(Request $request)
    {
        $gallery_id = $request->image_id;
        $gallery = Gallery::where('id', $gallery_id)->first();
        $gallery->is_deleted = 1;
        $result = $gallery->save();
        if ($result) {
            return response()->json([
                'status' => true,
                'result' => "Image deleted successfully",
            ], 200);
        }
        return response()->json([
            'status' => false,
            'result' => "Error deleting image",
        ], 200);
    }


    private function getBreedImageUrl(AnimalBreed $animalBreed)
    {
        $query_image = $animalBreed->breedImages()->first();
        if ($query_image) {
            $img_url = $query_image['img_url'];
            $query_image['img_url'] = $this->url . "/animal_img/breeds_img/" . $img_url;
            return $query_image['img_url'];
        } else
            return null;
    }

    public function getFavourite(Request $request)
    {
        $user = $request->user();
        $result = $user->favouriteBreed()->get();
        data_forget($result, '*.pivot');
        foreach ($result as $breed) {
            $breed['img_url'] = $this->getBreedImageUrl($breed);
        }
        return $result;
    }

    public function postLikeBreed(Request $request)
    {
        $user_id = $request->user()->id;
        $animal_breed_id = $request->animal_breed_id;

        $animal_breed = AnimalBreed::find($animal_breed_id);
        if (!$animal_breed) {
            return response()->json([
                'status' => false,
                'result' => "Invalid",
            ], 200);
        }

        if (Favourite::where('user_id', $user_id)->where('animal_breed_id', $animal_breed_id)->first() != null) {
            return response()->json([
                'status' => false,
                'result' => "Already exist",
            ], 200);
        }

        $item = new Favourite;
        $item->user_id = $user_id;
        $item->animal_breed_id = $animal_breed_id;
        $result = $item->save();
        if ($result) {
            return response()->json([
                'status' => true,
                'result' => "Bookmark added successfully",
            ], 200);
        }

        return response()->json([
            'status' => true,
            'result' => "Error adding bookmark",
        ], 200);
    }

    public function postUnLikeBreed(Request $request)
    {
        $user_id = $request->user()->id;
        $animal_breed_id = $request->animal_breed_id;

        $item =  Favourite::where('user_id', $user_id)->where('animal_breed_id', $animal_breed_id)->first();
        if ($item) {
            $result = $item->delete();
            if ($result) {
                return response()->json([
                    'status' => true,
                    'result' => "Bookmark removed successfully",
                ], 200);
            }
        }

        return response()->json([
            'status' => false,
            'result' => "Error removing bookmark",
        ], 200);
    }
}
