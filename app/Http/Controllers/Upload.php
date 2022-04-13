<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Upload extends Controller
{
    function index(Request $r){
        return $r->file('file')->store('docs');
    }
}
