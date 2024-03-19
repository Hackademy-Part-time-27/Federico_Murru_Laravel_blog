<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::get('/contacts-us', [PageController::class, 'contacts'])->name('contacts');

Route::get('/about-me', [PageController::class, 'aboutUs'])->name('about');

Route::get('/articles', [PageController::class, 'articles'])->name('articles');

Route::get('/article/{id?}', [PageController::class, 'article'])->name('article');
