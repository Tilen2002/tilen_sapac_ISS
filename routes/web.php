<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Naloga6Controller;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;

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

Route::get('/naloga-5', function () {
    return view('pages.naloga5.naloga01.index');
});

Route::get('/naloga-5/naloga02', function () {
    return view('pages.naloga5.naloga02.index');
});

Route::get('/naloga-5/naloga03', function () {
    return view('pages.naloga5.naloga03.index');
});

Route::get('/naloga-5/naloga04', function () {
    return view('pages.naloga5.naloga04.index');
});

Route::get('/naloga-5/naloga05', function () {
    return view('pages.naloga5.naloga05.index');
});

Route::get('/naloga-5/naloga06', function () {
    return view('pages.naloga5.naloga06.index');
});

Route::get('/naloga-5/naloga07', function () {
    return view('pages.naloga5.naloga07.index');
});

Route::get('/naloga-5/naloga08', function () {
    return view('pages.naloga5.naloga08.index');
});

Route::get('/naloga-5/naloga09', function () {
    return view('pages.naloga5.naloga09.index');
});

Route::get('/naloga-6', function () {
    return view('pages.naloga6.index');
});

Route::post('/naloga-6-post', [Naloga6Controller::class, 'postName']);

Route::get('/naloga-7', [NewsController::class, 'showNews'])->name('homepage');

Route::middleware(['CheckLogin'])->group(function () {
    
    Route::get('/naloga-7/admin', function () {
        return view('pages.naloga7.admin');
    });

    Route::get('/naloga-7/dodaj-novico', function () {
        return view('pages.naloga7.dodajNovica');
    });

    Route::get('/naloga-7/uredi-novico', [NewsController::class, 'newsForEdit'])->name('UrejanjeNovice');
    Route::get('/naloga-7/uredi/{slug}', [NewsController::class, 'editNews']);

    Route::post('/naloga-7/save-news', [NewsController::class, 'saveNews']);

    Route::post('/naloga-7/update-news', [NewsController::class, 'updateNews']);

    Route::get('/naloga-7/izbrisi/{slug}', [NewsController::class, 'deleteNews']);

    Route::get('/naloga7/odjava', [UserController::class, 'userLogout']);
});

Route::get('/clear-session', [PageController::class, 'deleteSession']);

Route::get('/naloga-7/registracija', [PageController::class, 'registracija']);

Route::get('/naloga-7/novica/{slug}', [NewsController::class, 'showSingleNews']);

Route::post('/naloga-7/registracijaSave', [UserController::class, 'createUser']);

Route::get('/naloga-7/prijava', [PageController::class, 'prijava'])->name('login');

Route::post('/naloga-7/UserLogin', [UserController::class, 'userLogin']);





