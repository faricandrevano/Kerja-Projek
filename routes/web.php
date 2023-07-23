<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'authentication'])->name('login');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'create'])->name('register');
});

Route::middleware(['auth'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['admin'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('home');

        Route::get('profile', function () {
            return view('pages.home.index', [
                'title' => 'Dashboard'
            ]);
        })->name('profile');
        Route::get('product', function () {
            return view('pages.home.index', [
                'title' => 'Dashboard'
            ]);
        })->name('product');
        Route::get('product/category', function () {
            return view('pages.home.index', [
                'title' => 'Dashboard'
            ]);
        })->name('product/category');
        Route::get('product/gallery', function () {
            return view('pages.home.index', [
                'title' => 'Dashboard'
            ]);
        })->name('product/gallery');
        Route::get('chat', function () {
            return view('pages.home.index', [
                'title' => 'Dashboard'
            ]);
        })->name('chat');
    });
});
