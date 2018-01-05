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

Route::get('/', 'ContactsController@index')->name('index');
Route::get('new', 'ContactsController@newContact')->name('new_contact');
Route::get('edit/{id}', 'ContactsController@editContact')->name('edit_contact');

Route::delete('delete', 'ContactsController@delete')->name('delete');
Route::post('add', 'ContactsController@add')->name('add');
Route::post('update', 'ContactsController@update')->name('update');
