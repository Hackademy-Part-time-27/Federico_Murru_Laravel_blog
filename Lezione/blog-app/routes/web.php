<?php


use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;


Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::get('/contacts-us', [ContactController::class, 'viewForm'])->name('contacts');
Route::post("/contacts-us/send", [ContactController::class, 'send'])->name('contacts.send');

Route::get('/about-me', [PageController::class, 'aboutUs'])->name('about');

Route::get('/articles', [PageController::class, 'articles'])->name('articles');

Route::get('/article/{id?}', [PageController::class, 'article'])->name('article');

Route::get('account/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('account/articles/store', [ArticleController::class, 'store'])->name('articles.store');


// Route::fallback(function () {
//     if (request()->route('id') > 4) {
//         abort(404);
//     }
// });
