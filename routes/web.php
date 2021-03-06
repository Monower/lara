<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\Upload;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Member;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\UploadFile;

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
/* Route::view('login','users')->middleware('protec'); */
Route::view('home','home');
Route::view('noaccess','noaccess');
/* Route::get('users',[Users::class,'index']); */

/* Route::get('users',[Users::class,'getapi']); */

/* Route::view('login','users'); */
/* Route::post('users',[Users::class,'test_req']); */

/* Route::view('login','login'); */
Route::post('user',[Users::class,'userlog']);
Route::view('profile','profile');

Route::get('/login', function () {
    if(session()->has('user')){
        return redirect('profile');

    }
    return view('login');
});

Route::get('/logout', function () {
    if(session()->has('user')){
        session()->pull('user');
    }

    return redirect('login');
});


Route::get('list', [MemberController::class,'show']);

Route::view('add', 'addmember');
Route::post('add',[MemberController::class,'addData']);
Route::get('del/{id}',[MemberController::class,'del']);
Route::get('edit/{id}',[MemberController::class,'edit']);
Route::post('editdata',[MemberController::class,'update']);

Route::get('list2',[Member::class,'dbOp']);

Route::get('sendmail',[EmailController::class,'sendEmail']);

Route::view('file','file');
Route::post('fileupload',[UploadFile::class,'upload'])->name('file');

Route::get('file/download',[UploadFile::class,'download'])->name('filedown');