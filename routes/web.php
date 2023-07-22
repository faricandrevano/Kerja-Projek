<?php

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

Route::get('/', function () {
    return view('pages.home.index', [
        'title' => 'Dashboard'
    ]);
})->name('home');
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
