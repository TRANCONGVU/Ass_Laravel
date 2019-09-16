<?php
Route::get('/', "HomeController@index" );
Route::get('/loadmore', "HomeController@loadMore" );
Route::get('/loadmore-html',"HomeController@loadMoreHtml");

Route::get('home',"FrontendController@phamnhan");

