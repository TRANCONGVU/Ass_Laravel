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

Route::get('/them-pham-nhan',"MyController@themPN");
Route::post('/them-pham-nhan',"MyController@luuPN");

Route::get('/them-phong-giam',"MyController@themPG");
Route::post('them-phong-giam',"MyController@luuPG");

Route::get('/them-giam-thi',"MyController@themGT");
Route::post('/them-giam-thi',"MyController@luuGT");

//sửa xóa dữ liệu

Route::get('/xoaPN/{id}',"MyController@xoaPN");
Route::get('/suaPN',"MyController@suaPN");
Route::post('/suaPN',"MyController@updatePN");
//


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
