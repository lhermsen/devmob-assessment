<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('messages', 'MessagesController@list');
Route::post('messages/send', 'MessagesController@store');
Route::get('messages/{message}', 'MessagesController@show');



/*
 *
Route::get('orders', 'OrdersController@search');
Route::post('orders', 'OrdersController@list');
Route::get('orders/{order}', 'OrdersController@show');

Route::get('issues/create/{order}', 'IssuesController@create');
Route::post('issues', 'IssuesController@store');

Route::get('notes/edit/{note}', 'NotesController@edit');
Route::patch('notes/{note}', 'NotesController@update');
 */