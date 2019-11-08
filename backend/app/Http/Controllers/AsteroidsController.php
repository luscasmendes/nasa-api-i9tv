<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsteroidsController extends Controller
{
    public function getAsteroids()
    {
        return file_get_contents(env('NASA_API_GET_ASTEROIDS')."?api_key=".env('NASA_API_KEY'));
    }

}
