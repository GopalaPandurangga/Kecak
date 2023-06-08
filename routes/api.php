<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\kecakcontroller;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\MainCastController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;
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

Route::get('kecak',[kecakcontroller::class, 'index'])->name ('kecak');
Route::post('kecak',[kecakcontroller::class, 'store'])->name ('kecak post');

Route::get('landing',[LandingPageController::class, 'index2'])->name ('landing');
Route::post('landing',[LandingPageController::class, 'store'])->name ('landing post');



Route::post('/login',[AuthController::class,'login']);

Route::get('paket',[PackageController::class, 'index2'])->name ('paket');
Route::post('paket',[PackageController::class, 'store'])->name ('paket post');
Route::post('/paket/{id}',[PackageController::class, 'update'])->name ('paket update');
Route::delete('/paket/{id}',[PackageController::class, 'destroy'])->name ('paket delete');

Route::group(['middleware'=>'auth:sanctum'], function () {
   
});

Route::get('cast',[MainCastController::class, 'index2'])->name ('cast');
Route::post('cast',[MainCastController::class, 'store'])->name ('cast post');

Route::get('News',[NewsController::class, 'index2'])->name ('News');
Route::post('News',[NewsController::class, 'store'])->name ('News post');

Route::get('about',[AboutController::class, 'index'])->name ('about api');
Route::post('about',[AboutController::class, 'store'])->name ('about post');




