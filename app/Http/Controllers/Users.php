<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class Users extends Controller
{
/*     public function loadview()
    {
        return view('users',['user'=>['anil','peter','bruce','loki']]);
    } */

/*     public function getdata(Request $r)
    {
        $r->validate([
            'username'=>'required'
        ]);
        return $r->input();
    } */

    function index(){
        /* return DB::select('select * from users'); */
        return User::all();
    }

}
