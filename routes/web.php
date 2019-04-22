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

//Route::get('/', function () {
////    $tasks = \App\Post::all();
////        return $tasks;
//});

Route::resource('/post', 'PostsController');

Auth::routes();

Route::get('/', 'HomeController@start');
Route::get('/home', 'HomeController@index')->name('home');

