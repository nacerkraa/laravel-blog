<?php

namespace App\Http\Controllers;


class UserController extends Controller
{
    public function index()
    {


        $titles = [
            'title1' => "The first title of this blog",
            'title2' => "The second title of this blog"
        ];

        return view('hello') -> with('titles', $titles);
    }
}
