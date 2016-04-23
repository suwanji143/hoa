<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/access', function(){
    echo 'you have access';

})->middleware('isAdmin');

Route::get('/admin','AdminController@index');
//Route::get('/', 'IndexController@index');

Route::auth();
Route::resource('test', 'TestController');
//Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/client', 'ClientController@index');
Route::get('/home/test', 'HomeController@test');
