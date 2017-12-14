<?php

// Users

Route::get('users', 'UsersController@list');
Route::get('users/{user}', 'UsersController@show');
Route::get('users/{user}/inbox', 'UsersController@listReceivedMessages');
Route::get('users/{user}/outbox', 'UsersController@listSentMessages');

// Messages

Route::get('messages', 'MessagesController@list');
Route::get('messages/{message}', 'MessagesController@show');
Route::post('messages/send', 'MessagesController@store');