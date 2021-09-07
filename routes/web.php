<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $data = config('comics');
    $data = ['comics' => $data];
    return view('main', $data);
})->name('comics');

Route::get('/details/{id}', function ($id) {
    $data = config('comics');
    $data = ['comic' => $data[$id]];
    return view('dettagli', $data);
})->name('dettaglio');