<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;
class DeviceController extends Controller
{
    function list(){
        return Device::all();
    }

    function add(Request $r){

        $device=new Device;
        $device->name=$r->name;
        $device->member_id=$r->member_id;
        $res=$device->save();

        if($res){
            return ["Result"=>"Data Has been Saved"];
        }else{
            return ["Result"=>"Data Did not insert"];
        }

        
    }

    function update(Request $r){

        $device=Device::find($r->id);
        $device->name=$r->name;
        $device->member_id=$r->member_id;
        $res=$device->save();

        if($res){
            return ['result'=>'data is updated'];
        }else{
            return ['result'=>'data is not updated'];
        }
    }

    function delete($id){

        $device=Device::find($id);
        $res=$device->delete();

        if($res){
            return ['result'=>'record deleted'];
        }else{
            return ['result'=>'record is not deleted'];
        }
        
    }

    function search($name){
        return Device::where('name','like','%'.$name.'%')->get();
    }

    function testData(Request $r){

        $rules=array(
            'member_id'=>'required|min:1|max:4'
        );
        $validator=Validator::make($r->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),401);
        }else{
            $device=new Device;
            $device->name=$r->name;
            $device->member_id=$r->member_id;
            $res=$device->save();
    
            if($res){
                return ["Result"=>"Data Has been Saved"];
            }else{
                return ["Result"=>"Data Did not insert"];
            }
        }
        
    }
}
