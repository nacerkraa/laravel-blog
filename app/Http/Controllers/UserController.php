<?php

namespace App\Http\Controllers;


class UserController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function show($id)
    {
        $id = $id;
        return view('posts')-> with("id", $id);
    }

    public function contact()
    {
        return view('contact');
    }
}
