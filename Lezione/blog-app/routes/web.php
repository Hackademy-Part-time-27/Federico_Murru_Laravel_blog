<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/chi_sono', function () {
    return view('chi_sono', [
        "title" => "Titolo dinamico",
        "description" => "Breve descrizione ma dinamica"
    ]);
});

Route::post('/contatti');
Route::post('/chi_sono');