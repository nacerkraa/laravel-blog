<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class,'index']) -> name("home");
Route::get('/posts', [PostController::class,'show']) -> name("post");
Route::get('/post/{id}', [PostController::class,'showPost']) -> name("post.show");
Route::get('/posts/create', [PostController::class,'createPost']) -> name("post.create");
Route::post('/posts/create', [PostController::class,'store']) -> name("post.store");
Route::get('/comments', [PostController::class,'showComments']) -> name("comments");
//Route::get('/comment/{id}', [PostController::class,'showComment']) -> name("comment.show");
Route::get('/contact', [PostController::class,'contact']) -> name("contact");
