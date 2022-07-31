<?php

namespace App\Http\Controllers;


class UserController extends Controller
{
    public function index()
    {
        $title1 = "The first title of this blog";
        $title2 = "The second title of this blog";
        
        return view('hello',[
            'title1' => $title1,
            'title2' => $title2,
        ]);
    }
}
