<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ContactController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'create'])->name('profile.store');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// home controller

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->middleware('auth:sanctum', 'verified')->name('about');
Route::get('/package', [HomeController::class, 'package'])->middleware('auth:sanctum', 'verified')->name('package');
Route::get('/kontakkk', [HomeController::class, 'kontakkk'])->middleware('auth:sanctum', 'verified')->name('kontakkk');
Route::get('/detailpackage', [HomeController::class, 'detailpackage'])->name('detailpackage');
Route::get('/galery', [HomeController::class, 'galery'])->name('galery');


// berita controller
Route::get('/testi', [BeritaController::class, 'testi'])->middleware('auth:sanctum', 'verified')->name('testi');
Route::resource('berita', BeritaController::class);
// package controller
Route::get('/pkgg', [PackageController::class, 'index'])->middleware('auth:sanctum', 'verified')->name('pkgg');
Route::get('/kontak2', [PackageController::class, 'kontak2'])->middleware('auth:sanctum', 'verified')->name('kontak2');
Route::resource('paket', PackageController::class);
// contact
Route::get('/kontak', [ContactController::class, 'index'])->middleware('auth:sanctum', 'verified')->name('kontak');
Route::get('/kontak2', [ContactController::class, 'kontak2'])->middleware('auth:sanctum', 'verified')->name('kontak2');
Route::resource('contact', ContactController::class);

Route::get('/livewire',function(){
    return view('backpage.livewireBlade');
 });
require __DIR__.'/auth.php';
