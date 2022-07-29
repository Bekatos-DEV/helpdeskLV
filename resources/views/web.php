<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view(view:'anasayfa');
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