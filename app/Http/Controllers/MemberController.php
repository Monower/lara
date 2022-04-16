<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function show(){

        $data= Member::all();
        return view('list',['members'=>$data]);
    }

    function addData(Request $r){
        $member= new Member;
        $member->name=$r->name;
        $member->email=$r->email;
        $member->address=$r->address;
        $member->save();

        return redirect('add');
    }
}
