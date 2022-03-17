<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function loadview($name)
    {
        return view('users',['name'=>$name]);
    }
    public function index($name)
    {
        return view('users',['name'=>$name]);
    }
}
