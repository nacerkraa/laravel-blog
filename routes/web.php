<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
// Route::get('/user', 'App\Http\Controllers\UserController@index'); # un deuxéme method


Route::get('/', [UserController::class, 'index']);
Route::get('/post/{id}', [UserController::class, 'show'])-> whereNumber('id');
Route::get('/contact', [UserController::class, 'contact']);





