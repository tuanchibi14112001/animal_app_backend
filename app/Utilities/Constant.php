<?php


namespace App\Utilities;

class Constant {

    const BASE_URL = "http://192.168.1.2:8000";


    // USER
    const user_level_host = 0;
    const user_level_admin = 1;
    const user_level_client = 2;

    public static $user_level = [
        self::user_level_admin => 'admin',
        self::user_level_client => 'client',
        self::user_level_host => 'host',
    ];


}