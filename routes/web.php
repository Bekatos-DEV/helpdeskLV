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
    return view('anasayfa');
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
    return view(view:'talepKategorileri');
});

Route::get('/iletisim', function () {
    return view(view:'iletisim');
});

Route::get('/kayitOl', function () {
    return view(view:'signup');
});

Route::get('/talepBasvuru', function () {
    return view(view:'talepOlustur');
});

Route::get('/taleplerim', function () {
    return view(view:'talepler');
});
