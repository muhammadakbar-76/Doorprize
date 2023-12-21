<?php

namespace App\Custom;

use Illuminate\Support\Str;

class Custom_helper
{

    /**
     * return a random string for id in database
     *
     * @return string
     */
    public static function create_id(): string
    {
        $unix = now() . Str::random(16);
        return md5($unix);
    }
}
