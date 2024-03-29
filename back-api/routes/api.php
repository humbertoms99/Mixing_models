<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('test','App\Http\Controllers\Api\ShellController@test');
Route::get('nwFile','App\Http\Controllers\Api\ShellController@nwFile');
Route::post('editFile','App\Http\Controllers\Api\ShellController@editFile');
Route::get('nonSquares','App\Http\Controllers\Api\ShellController@nonSquares');