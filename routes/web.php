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

Route::get('/', static function () {
    return view('accueil');
});

Route::get('card', static function () {
    return view('alpineJs.cards');
})->name('card');

Route::get('stats', static function () {
    return view('alpineJs.dynamicValue');
})->name('stats');
