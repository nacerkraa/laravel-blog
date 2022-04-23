<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function getData(Request $req){
        $data = $req -> input();
        return "Hello " . $data['user'] . ", your password is: ". $data['password'];
    }
}
