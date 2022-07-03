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
Route::get('contact','ContactController@contact');
Route::get('home','HomeController@home');
Route::get('create-user','UserController@create');
Route::get('user','UserController@index');
Route::get('user/{id}','UserController@show');
Route::get('user/{id}/delete','UserController@delete');
Route::post('add-user','UserController@store');

Route::put('update-user','UserController@update');

Route::prefix('admin')->group(function(){
    Route::get('hello',function(){
        return "Hello";
    });
});
