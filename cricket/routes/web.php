<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basic;
use App\Http\Controllers\EmployerController;

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
    return view('welcome');
});


Route::get('/diru/{id}/{name?}',function($id,$name){
return $id.$name;
});

// route naming
Route::get('/page/{id}',function($id){
if($id>5){
    return redirect()->route('index');
}else{
    return redirect()->route('home');
}
});

Route::get('/index/dirushan',function(){
return " index";
}
)->name('index');

Route::get('/index/csk',function(){
    return " home";
    }
    )->name('home');
// route groups
Route::group(['prefix'=>'gallery'],function(){
    Route::get('/video',function(){
return '<h1> videos</h1>';
    });

    Route::get('/photo',function(){
        return '<h1> photos</h1>';
            });
});




//controller
Route::get('/basic',[basic::class,'index']);

Route::get('/index',[EmployerController::class,'index']);
Route::get('/create',[EmployerController::class,'create']);

