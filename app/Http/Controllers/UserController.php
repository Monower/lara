<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index(Request $r){
        $user=User::where('email',$r->email)->first();

        if(!$user || !Hash::check($r->password, $user->password)){
            return response()->json("The credentials do not match our records", 404);
        }

        $token=$user->createToken('my-app-token')->plainTextToken;

        $response=array('user'=>$user,'token'=>$token);

        return response($response,201);
    }
}
