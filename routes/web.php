<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return redirect('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/ask', function () {
    return view('questions');
});


Route::post("users",[UsersController::class,'getData']);
Route::view('login', 'form');
Route::view('noaccess', 'noaccess');
