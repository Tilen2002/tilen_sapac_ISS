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
    return view('pages.landing_page.menu');
});

Route::get('/naloga-1', function () {
    return view('pages.naloga1.index');
});

Route::get('/naloga-2', function () {
    return view('pages.naloga2.index');
});

Route::get('/naloga-2/predloga', function () {
    return view('pages.naloga2.predloga');
});

Route::get('/naloga-2/css_napredno', function () {
    return view('pages.naloga2.css_napredno.index');
});

Route::get('/naloga-2/meni', function () {
    return view('pages.naloga2.meni');
});

Route::get('/naloga-3', function () {
    return view('pages.naloga3.index');
});

Route::get('/naloga-4', function () {
    return view('pages.naloga4.index');
});
