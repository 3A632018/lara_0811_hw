<?php

Route::get('/', ['as'=>'home.index','uses'=>'HomeController@index']);
Route::get('/about', ['as'=>'about.index','uses'=>'AboutController@index']);
Route::get('/news', ['as'=>'news.index','uses'=>'NewsController@index']);

//Route::get('/', function () {
    //return view('welcome');
//});


