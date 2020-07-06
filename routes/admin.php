<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PagesController@index')->name('dashboard');
Route::resource('tags', 'TagController');
Route::resource('articles', 'ArticleController');
Route::resource('admins', 'AdminController');
