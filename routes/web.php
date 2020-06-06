<?php

Auth::routes();

Route::get('/', 'DocumentController@index')->name('documents.index');

Route::resource('/documents', 'DocumentController')->except(['index'])->middleware('auth'); // 未ログインユーザー対処