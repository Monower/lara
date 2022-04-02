<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('hello');
});

//Route::redirect('/','about');

/* Route::get('/about',function(){
    return view('about');
}); */

Route::view('about','about');
Route::view('con','contact');

/* Route::get('users',[Users::class,'loadview']); */

/* Route::get('user/{name}',function($name){
    return view('users',['name'=>$name]);
}); */

/* Route::get('user/{name}',[Users::class,'loadview']); */

/* Route::POST('users',[Users::class,'getdata']); */
Route::view('login','users')->middleware('protec');
Route::view('home','home');
Route::view('noaccess','noaccess');
Route::get('users',[Users::class,'index']);