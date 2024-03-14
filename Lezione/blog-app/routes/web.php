<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        "title" => "Ciao! Questo e il mio blog",
        "description" => "Benvenuti nel mio blog Laravel! Qui 
        troverete una raccolta delle mie esperienze,
         conoscenze e risorse nel mondo dello sviluppo web con Laravel."
    ]);
})->name('welcome');


Route::get('/contacts-us', function () {
    return view('pages.contacts');
})->name('contacts');


Route::get('/about-me', function () {
    return view('pages.about-me', [
        "title" => "Titolo dinamico",
        "description" => "Breve descrizione ma dinamica"
    ]);
})->name('about');

// Route::get('/{id}', function ($id) {
//     return "This is " . $id;
// });



Route::get('/articles', function () {

    $articles = [
        ['title' => 'Perché JS è migliore di PHP', 'description' => '...'],
        ['title' => 'Perché PHP è migliore di JS', 'description' => '...'],
        ['title' => 'A me non piace nessuno dei due', 'description' => '...'],
    ];

    //$articles = [];

    return view('pages.articles', ['articles' => $articles]);
})->name('articles');


Route::get('/article/{id?}', function ($id) {

    $index = $id;

    $articles = [
        ['title' => 'Perché JS è migliore di PHP', 'category' => 'Categoria: Programmazione JS', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
        ['title' => 'Perché PHP è migliore di JS', 'category' => 'Categoria: Programmazione PHP', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
        ['title' => 'A me non piace nessuno dei due', 'category' => 'Categoria: Programmazione generica', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
    ];

    if (array_key_exists($index, $articles)) {
        return view('pages.article', ['article' => $articles[$index]]);
    } else {
        abort(404);
    }
})->name('article');
