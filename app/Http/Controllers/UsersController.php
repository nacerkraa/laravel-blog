<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function loadViews(){
        $data=['ahmed','raouf','jakop','sara'];
        return view('Hello',['item' => $data]);
    }
}
