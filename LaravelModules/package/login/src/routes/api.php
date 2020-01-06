<?php
  Route::get('data/{id}',[
    'uses' => 'API\UserController@index',
    'as' => 'user.data'
]);