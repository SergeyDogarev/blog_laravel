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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostsController@index')->name('posts');

Route::get('/posts/{post}', 'PostsController@show')->name('show');


//Admin panel

Route::get('/admin', 'AdminController@index')->name('index');
//Admin tables users
Route::get('/admin/tables', 'TablesUserController@index')->name('tables');
//Route::put('/admin/tables/{update}', 'TablesUserController@update')->name('update');
//Admin tables users.

Route::get('/admin/addpost', 'AdminAddPostController@create')->name('create');
Route::post('/admin/addpost/store', 'AdminAddPostController@store')->name('store');
