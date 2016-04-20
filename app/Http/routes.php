<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;
$id;
Route::get('/', function () {
    return view('welcome');
});
Route::post('/login','System@login');
Route::get('/Menu/{id}','System@menu');
Route::get('/appregis',function(){
    return view('appregi');
});
Route::get('/searchapp',function(){
    return view('searchapp');
});
Route::get('/contact',function(){
        return view('contact');
});
Route::get('/logout','System@logout');