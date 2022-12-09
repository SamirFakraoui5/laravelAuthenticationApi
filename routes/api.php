<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\technicienController;
use App\Http\Controllers\API\TechController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'App\Http\Controllers\API\TechnicienController@login');
    Route::post('register', 'App\Http\Controllers\API\TechnicienController@register');
    Route::post('logout', 'App\Http\Controllers\API\TechnicienController@logout');
    Route::post('refresh', 'App\Http\Controllers\API\TechnicienController@refresh');
    Route::get('user-profile', 'App\Http\Controllers\API\TechnicienController@userProfile');
});

Route::get('technicien','App\Http\Controllers\API\TechController@index');
Route::get('technicien/{technicien}','App\Http\Controllers\API\TechController@show');
Route::post('technicien','App\Http\Controllers\API\TechController@store');
Route::put('technicien/{technicien}','App\Http\Controllers\API\TechController@update');
Route::delete('technicien/{technicien}','App\Http\Controllers\API\TechController@delete');


