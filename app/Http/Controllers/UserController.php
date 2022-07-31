<?php

namespace App\Http\Controllers;


class UserController extends Controller
{
    public function index()
    {
        $title = "The title of this blog";
        return view('hello') -> with('title',$title);
    }
}
