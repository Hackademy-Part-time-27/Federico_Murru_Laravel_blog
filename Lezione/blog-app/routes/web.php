<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/contacts', function () {
    return view('pages.contacts');
})->name('contacts');


Route::get('/about-me', function () {
    return view('pages.about-me', [
        "title" => "Titolo dinamico",
        "description" => "Breve descrizione ma dinamica"
    ]);
})->name('about_me');

// Route::get('/{id}', function ($id) {
//     return "This is " . $id;
// });


Route::get('/articoli', function () {

    $articles = [
        ['title' => 'Perché JS è migliore di PHP', 'description' => '...'],
        ['title' => 'Perché PHP è migliore di JS', 'description' => '...'],
        ['title' => 'A me non piace nessuno dei due', 'description' => '...'],
    ];

    //$articles = [];

    return view('pages.articles', ['articles' => $articles]);
})->name('articles');


Route::get('/articolo/{article?}', function ($article) {

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
