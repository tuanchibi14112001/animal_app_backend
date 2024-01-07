<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('animal_species', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('animal_family_id');
            $table->string('name');
            $table->string('animal_length');
            $table->string('animal_tail');
            $table->string('animal_weight');
            $table->string('average_lifespan');
            $table->text('comments');
            $table->string('img_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal_species');
    }
};
