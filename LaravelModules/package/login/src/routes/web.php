<?php
Route::group(['namespace' => 'Dule\Login\Http\Controllers'],function(){
    Route::get('loginView','LoginController@index')->name('loginView');
    Route::post('loginUser','LoginController@login')->name('loginUser');
    Route::get('home/{id}','LoginController@home')->name('home');
});
