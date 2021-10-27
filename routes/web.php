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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/about', function () {
    return view('aboutME');
});

Route::get('/html', function () {
    return view('html');
});

Route::get('/csss', function () {
    return view('cssLern');
});

Route::get('/jss', function () {
    return view('javaScript');
});

Route::get('/phpp', function () {
    return view('php');
});

Route::get('/es', function () {
    return view('spanish');
});

Route::get('/de', function () {
    return view('deutsch');
});

Route::get('/en', function () {
    return view('english');
});

Route::get('/mecano', function () {
    return view('mecanografi');
});

Route::get('/test', function () {
    return view('test');
});
