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

Route::get('/', 'ContactsController@index');
Route::get('new', 'ContactsController@newUser');
Route::get('edit/{id}', 'ContactsController@editUser');

Route::delete('delete', 'ContactsController@delete');
Route::post('add', 'ContactsController@add');
Route::post('update', 'ContactsController@update');
