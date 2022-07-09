<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('site.pages.home');
});
Route::get('/contatos', function () {
    return view('site.pages.contatos');
});
