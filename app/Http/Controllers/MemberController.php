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

    function del($id){
        $data=Member::find($id);

        $data->delete();

        return redirect('list');
    }

    function edit($id){
        $data=Member::find($id);
        return view('edit',['data'=>$data]);
    }

    function update(Request $r){
        $data=Member::find($r->id);
        $data->name=$r->name;
        $data->email=$r->email;
        $data->address=$r->address;

        $data->save();

        return redirect('list');
    }

}
