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
    return view('homepage.index', [
        'title' => 'Home'
    ]);
});

Route::get('/about-conference', function () {
    return view('homepage.about', [
        'title' => 'About'
    ]);
});

Route::get('/register', function () {
    return view('homepage.register', [
        'title' => 'Registration'
    ]);
});
