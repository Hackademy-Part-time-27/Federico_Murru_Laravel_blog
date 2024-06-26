<?php


use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::get('/contacts-us', [ContactController::class, 'viewForm'])->name('contacts');
Route::post("/contacts-us/send", [ContactController::class, 'send'])->name('contacts.send');

Route::get('/about-me', [PageController::class, 'aboutUs'])->name('about');

Route::get('/articles', [PageController::class, 'articles'])->name('articles');

Route::get('/article/{id?}', [PageController::class, 'article'])->name('article');


Route::prefix('account')->middleware('auth')->group(function () {

    Route::get('/', [App\Http\Controllers\AccountController::class, 'index'])->name('account.index');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{article}/update', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{article}/destroy', [ArticleController::class, 'destroy'])->name('articles.destroy');

    Route::resource('/categories', CategoryController::class);



    /*
    Route::resources([
        '/categories' => CategoryController::class,
        '/articles' => ArticleController::class,
    ]);*/
});

//Route::get('account', [App\Http\Controllers\AccountController::class, 'index'])->name('account.index');
