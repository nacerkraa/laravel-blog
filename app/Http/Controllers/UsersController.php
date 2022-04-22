<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function loadViews($name){
        return view('Hello',['name' => $name]);
    }
}
