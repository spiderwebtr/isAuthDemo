<?php

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


use Illuminate\Http\Request;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get("/logout",function(){
   auth()->logout();
   return "You logged out. Go back to first tab.";
})->name("logout");
Route::post("/save",function(Request $request){
    return "<b>Successful!</b> Your message is ".$request->input;
})->name("save");
