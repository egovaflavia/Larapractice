<?php

use App\Http\Controllers\BPJS\ServiceWebController;
use App\Http\Controllers\TestController;
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


Route::get('v1/test', [TestController::class,'getMethod']);
Route::get('v1/test2', [TestController::class,'getHttp']);

Route::get('v2/token', [ServiceWebController::class, 'getToken']);
