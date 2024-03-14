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


Route::get('/article/{article?}', function ($article) {

    $index = $article;

    $articles = [
        ['title' => 'Perché JS è migliore di PHP', 'description' => '...'],
        ['title' => 'Perché PHP è migliore di JS', 'description' => '...'],
        ['title' => 'A me non piace nessuno dei due', 'description' => '...'],
    ];

    if (array_key_exists($index, $articles)) {
        return view('pages.article', ['article' => $articles[$index]]);
    } else {
        abort(404);
    }
})->name('article');
