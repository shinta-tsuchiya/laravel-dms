<?php

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/documents', 'DocumentController@index')->name('documents.index');

