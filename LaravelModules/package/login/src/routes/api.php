<?php
Route::group(['namespace' => 'Dule\Login\Http\Controllers'],function(){
  Route::get('api/data/{id}',[
    'uses' => 'API\UserController@index',
    'as' => 'user.data'
]);
});