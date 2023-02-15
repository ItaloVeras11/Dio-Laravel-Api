<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWordController extends Controller
{
    public function hello($name){

        return response()->json("Hello Word {$name}");

    }
}
