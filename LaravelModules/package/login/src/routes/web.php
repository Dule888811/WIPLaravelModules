<?php
Route::group(['namespace' => 'Dule\Login\Http\Controllers'],function(){
    Route::get('loginView','LoginController@index')->name('loginView');
    Route::post('login','LoginController@login')->name('login');
});
