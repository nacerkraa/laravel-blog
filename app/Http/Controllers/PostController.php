<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('Home');
    }

    public function show()
    {
        return view('Post');
    }
}
