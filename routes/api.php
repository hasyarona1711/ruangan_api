<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('ruangan','RuanganController@index');
Route::get('ruangan/seacrh/{nama_ruangan}','RuanganController@search');