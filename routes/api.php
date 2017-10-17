<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/tasks/show/{id}', 'ExibeController@show',['middleware'=>'auth:api']);
Route::post('/startTaskuser/store','StarttaskuserController@store',['middleware'=>'auth:api']);
Route::post('/endTaskuser/store','EndtaskuserController@store',['middleware'=>'auth:api']);


