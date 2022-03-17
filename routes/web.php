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
    return \Inertia\Inertia::render('LandingPage');
});

Route::get('/fonts', function () {
    return view('fonts');
});

Route::get('/fonts/{font}', function ($font) {
    return view('font-sample', ['fontName' => $font]);
});
