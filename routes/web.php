<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\AboutController;
use App\Http\Controllers\UserController;
use App\Models\Article;

Route::get('/', Controllers\HomeController::class);
Route::get('/about-us', [Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [Controllers\ContactController::class, 'index']);
Route::get('/gallery', [Controllers\GalleryController::class, 'index']);

Route::resource('users', Controllers\UserController::class);

Route::get('login', [Controllers\LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('login', [Controllers\LoginController::class, 'authenticate'])->middleware('guest');

Route::post('logout', Controllers\LogoutController::class)->name('logout')->middleware('auth');