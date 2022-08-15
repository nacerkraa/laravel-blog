<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
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
        
        $post = Post::find($id);
        /*
         or $post = Post::findorfail($id);    When we need to use the show 404 not found for the id that not exsit.
        */
        return view('post',[
            'post' => $post
        ]);
    }

    public function createPost()
    {
        return view('createPost');
    }

    public function store(Request $request)
    {
        Post::create([
            'title'   => $request->title,
            'content' => $request->content,
        ]);
       dd("la post est crée");
       return view('home');

        /*$post = new Post();
        $post -> title = $request -> title;
        $post -> content = $request -> content;
        $post -> save();*/
    }

    public function showComments()
    {
        $comment = Comment::all();
        
        return view('comment-list',[
            'comments' => $comment
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
