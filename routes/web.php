<?php

use Illuminate\Support\Facades\Route;

Route::get('/blog', 'BlogController@index');
Route::post('/blog', 'BlogController@store');
Route::get('/blog/{blog}', 'BlogController@edit');
Route::patch('/blog/{blog}', 'BlogController@update');
Route::delete('/blog/{blog}', 'BlogController@destroy');
Route::get('/contact-us', 'ContactController@index');
Route::post('/contact-us', 'ContactController@store');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
