<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AboutController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/data/{id}', [LandingPageController::class, 'show']  );
Route::get('/', [LandingPageController::class, 'index'] );

Route::get('/package', [PackageController::class, 'package'])->name('package');
Route::get('/detailpackage/{package_id}', [PackageController::class, 'show'])->name('detailpackage');

Route::get('/about', [AboutController::class, 'about'])->name('about');

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

Route::get('/kontakkk', [HomeController::class, 'kontakkk'])->name('kontakkk');

Route::get('/galery', [HomeController::class, 'galery'])->name('galery');


// berita controller
Route::get('/testi', [BeritaController::class, 'testi'])->name('testi');
Route::resource('berita', BeritaController::class);

// package controller
Route::get('/pkgg', [PackageController::class, 'index'])->middleware('auth:sanctum', 'verified')->name('pkgg');
Route::get('/kontak2', [PackageController::class, 'kontak2'])->name('kontak2');
Route::resource('paket', PackageController::class);
// contact
Route::get('/kontak', [ContactController::class, 'index'])->middleware('auth:sanctum', 'verified')->name('kontak');
Route::get('/kontak2', [ContactController::class, 'kontak2'])->name('kontak2');
Route::resource('contact', ContactController::class);

Route::get('/livewire',function(){
    return view('backpage.livewireBlade');
 });
require __DIR__.'/auth.php';
