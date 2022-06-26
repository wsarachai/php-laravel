<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    //
    // class body
    function show()
    {
        return view('hello-world');
    }
}
