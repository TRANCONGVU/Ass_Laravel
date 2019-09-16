<?php

Auth::routes();

// Route::get('/list',function()
// {
//     return view('danhsach.danhsach');
// });

// Route::get('/admin', function(){
//     return view('admin.layout.admin');
// });

Route::group(['middleware' => 'admin' ,"prefix" => "admin"], function () {
    include_once("admin.php");
});
include_once("frontend.php");

// Route::get('/student',"DemoController@StudentList");
// Route::get('/add-student',"DemoController@addStudent");
// Route::post('/add-student',"DemoController@saveStudent");
