<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function upload(Request $r)
    {
        /* $result= */return $r->file('file')->store('docs');
/*         return array('result'=>$result); */
    }
}
