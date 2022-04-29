<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct(Type $var = null)
    {
        $this-> middleware('auth') -> except('too');
    }

    public function too()
    {
        return view('too');
    }

    public function foo()
    {
        return view('foo');
    }
}
