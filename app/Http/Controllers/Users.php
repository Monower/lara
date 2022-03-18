<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function loadview()
    {
        return view('users',['user'=>['anil','peter','bruce','loki']]);
    }

}
