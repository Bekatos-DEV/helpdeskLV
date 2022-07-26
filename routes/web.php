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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/test', function(){
    Artisan::call('migrate');
    Artisan::call('db:seed');
});

Route::get('/talepler', function () {
    return view(view:'ReportCategories');
});

Route::get('/iletisim', function () {
    return view(view:'contact');
});

Route::get('/kayitOl', function () {
    return view(view:'signup');
});

Route::get('/talepBasvuru', function () {
    return view(view:'CreateReport');
});

Route::get('/taleplerim', function () {
    return view(view:'reports');
});

Route::get('/talepGoster', function () {
    return view(view:'ShowReports');
});