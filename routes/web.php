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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('api/user','UsersController',['middleware'=>'auth']); 
Route::get('api/user/showlocation','UsersController@showlocation',['middleware'=>'auth']); 
Route::resource('api/users','UserController',['middleware'=>'auth:api']);
Route::get('api/tasksUser/{id}','ExibeController@show',['middleware'=>'auth:api']);
Route::get('api/tasks/show/{id}', 'ExibeController@show',['middleware'=>'auth:api']);
Route::resource('api/tasks','TasksController',['middleware'=>'auth']);
Route::resource('api/localizations','LocalizationsController',['middleware'=>'auth:api']);

