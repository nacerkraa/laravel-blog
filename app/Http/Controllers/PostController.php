<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function show()
    {
        /*$post = [
            'hello',
            'nacer'
        ];*/
        
        $post = Post::all();
        
        return view('post-list',[
            'posts' => $post
        ]);
    }

    public function showPost($id)
    {
        
        $post = $id;
        
        return view('post',[
            'posts' => $post
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
