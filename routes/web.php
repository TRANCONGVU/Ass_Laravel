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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/list',function()
{
    return view('danhsach.danhsach');
});

Route::get('/admin', function(){
    return view('admin.layout.admin');
});

Route::get('/pham-nhan',"MyController@PhamNhanList");
Route::get('/giam-thi',"MyController@GiamThiList");
Route::get('/phong-giam',"MyController@PhongGiamList");



Route::group(['middleware' => 'admin'], function () {
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


    Route::get('/xoaGT/{id}',"MyController@xoaGT");
    Route::get('/suaGT',"MyController@suaGT");
    Route::post('/suaGT',"MyController@updateGT");

    Route::get('/xoaPG/{id}',"MyController@xoaPG");
    Route::get('/suaPG',"MyController@suaPG");
    Route::post('/suaPG',"MyController@updatePG");
    //
});

Route::get('/home', 'HomeController@index');
