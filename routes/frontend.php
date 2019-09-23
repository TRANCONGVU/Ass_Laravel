<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "HomeController@index" );
Route::get('/loadmore', "HomeController@loadMore" );
Route::get('/loadmore-html',"HomeController@loadMoreHtml");

Route::get('home',"FrontendController@phamnhan");

Route::get('a', function(){
    return view ('pages.trangchu');
});
Route::get('/chitiet',"HomeController@chitietPN");
