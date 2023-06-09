<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\kecakcontroller;
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

Route::get('kecak',[kecakcontroller::class, 'index'])->name ('kecak');
Route::post('kecak',[kecakcontroller::class, 'store'])->name ('kecak post');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


