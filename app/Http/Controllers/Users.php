<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;

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

/*     function index(){
        return DB::select('select * from users');
        return User::all();
    } */

/*     function getapi(){
        $data=Http::get('https://reqres.in/api/users?page=1');

        return view('users',['data'=>$data['data']]);
    } */




/*     function test_req(Request $r){
        return $r->input();
    } */

    function userlog(Request $r){
        $data= $r->input();

        $r->session()->put('user',$data['user']);

        return redirect('profile');



    }

}
