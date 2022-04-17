<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Member extends Controller
{
    function dbOp(){
        /* return DB::table('members')->insert; */

        //return DB::update('update members set address=? where id=?', ['dhaka',9]);

       return DB::delete('delete from members where id=?', [11]);

        
    }
}
