<?php
Route::group(['namespace' => 'Dule\Humanity\Http\Controllers'],function(){
    Route::get('index','IndexController@index')->name('index');
});
