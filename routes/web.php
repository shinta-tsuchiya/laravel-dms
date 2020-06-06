<?php

Auth::routes();

// ホーム
Route::get('/', 'DocumentController@index')->name('documents.index');

// 一覧 未ログインユーザー対処
Route::resource('/documents', 'DocumentController')->except(['index'])->middleware('auth');
