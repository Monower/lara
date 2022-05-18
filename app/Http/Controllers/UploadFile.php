<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class UploadFile extends Controller
{
    public function upload(Request $r){
        $r->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName= time().'-'.$r->name.'.'.$r->image->extension();

        $test=$r->image->move(public_path('images'),$newImageName);

        $member=new Member;
        $member->name=$r->name;
        $member->email=$r->email;
        $member->address=$r->address;
        $member->image_path=$newImageName;

        $member->save();

        return redirect()->back();

    }

    public function download(){
        $pathToFile=public_path().'/images/1652855127-sadaf.jpg';
        return response()->download($pathToFile);
    }
}
