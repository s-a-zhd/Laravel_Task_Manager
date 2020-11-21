<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('about', 'AboutController@index');
Route::get('todo','TodoController@index');
Route::get('todo/{todo}','TodoController@show');
Route::get('newTodo','TodoController@create');
Route::post('newTodo','TodoController@store');
Route::get('todo/{todo}/edit','TodoController@edit');
Route::post('todo/{todo}/updateTodo','TodoController@update');
Route::get('todo/{todo}/delete','TodoController@destroy');

