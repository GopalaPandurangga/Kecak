<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MainCastController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TicketOrderController;
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

//home
Route::get('/', [LandingPageController::class, 'content'] );
Route::resource('content', LandingPageController::class);

Route::resource('orderticket', TicketOrderController::class);

//maincast
Route::resource('cast', MainCastController::class);

//latestnews
Route::resource('news', NewsController::class);
Route::get('/latestnews', [NewsController::class, 'news'])->name('news');
Route::get('/detailnews/{news_id}', [NewsController::class, 'show'])->name('detailnews');

//package
Route::get('/package', [PackageController::class, 'package'])->name('package');
Route::get('/detailpackage/{package_id}', [PackageController::class, 'show'])->name('detailpackage');

//about
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



Route::get('/galery', [HomeController::class, 'galery'])->name('galery');


// berita controller
Route::get('/testi', [BeritaController::class, 'testi'])->name('testi');
Route::resource('berita', BeritaController::class);

// package controller
Route::get('/pkgg', [PackageController::class, 'index'])->middleware('auth:sanctum', 'verified')->name('pkgg');

Route::resource('paket', PackageController::class);

// contact
Route::get('/kontak', [ContactController::class, 'index'])->middleware('auth:sanctum', 'verified')->name('kontak');
Route::get('/order', [TicketOrderController::class, 'kontak2'])->middleware('auth:sanctum', 'verified')->name('kontak2');
Route::resource('contact', ContactController::class);

Route::get('/livewire',function(){
    return view('backpage.livewireBlade');
 });
require __DIR__.'/auth.php';
