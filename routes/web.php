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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/list',function()
{
    return view('danhsach.danhsach');
});

Route::get('hello' ,"DemoController@helloWorld");

Route::get('/say-hello' , "DemoController@sayHello");
Route::get('/pham-nhan',"MyController@PhamNhanList");
Route::get('/giam-thi',"MyController@GiamThiList");
Route::get('/phong-giam',"MyController@PhongGiamList");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
