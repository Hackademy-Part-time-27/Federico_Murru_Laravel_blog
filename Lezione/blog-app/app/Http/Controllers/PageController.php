<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class PageController extends Controller
{

    public function welcome()
    {
        $title = config('app.name');
        $articles = Article::all();
        return view('welcome', compact('title', 'articles'));
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function aboutUs()
    {
        return view('pages.about-me', [
            "title" => "Titolo dinamico",
            "description" => "Breve descrizione ma dinamica"
        ]);
    }

    public function articles()
    {
        $articles = Article::where('visible', true)->get();

        return view('pages.articles', ['articles' => $articles]);
    }


    public function article($article)
    {
        $article = Article::findOrFail($article);
        return view('pages.article', ['article' => $article]);
    }
}
