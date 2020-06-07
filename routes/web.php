<?php

Auth::routes();

// ホーム
Route::get('/', 'HomeController@index')->name('home');

// 文書一覧
Route::get('/documents', 'DocumentController@index')->name('documents.index');

// 一覧 未ログインユーザー対処
Route::resource('/documents', 'DocumentController')->except(['index'])->middleware('auth');
