<?php

use Illuminate\Support\Facades\Route;

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
    return view('index',['bodyClass'=>'','navClass'=>'navFirst']);
});

Route::get('/adopta', function(){
    return view('adopta',['bodyClass'=>'subpage','navClass'=>'']);
});
Route::get('/adopta/{id}/conoceme','AnimalitoController@conoceme')->name('conoceme');

Route::get('/apoyanos',function(){
    return view('apoyanos',['bodyClass'=>'subpage','navClass'=>'']);
});

/* Administrador */
Auth::routes();
Route::get('/admin','AdminController@home')->name('home');
Route::resource('/rescataditos','AnimalitoController');

Route::get('/test',function() {
    return view('test',['bodyClass'=>'subpage','navClass'=>'']);
});


