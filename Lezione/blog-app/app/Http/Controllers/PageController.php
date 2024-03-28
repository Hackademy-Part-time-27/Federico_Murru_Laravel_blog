<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class PageController extends Controller
{


    // public function welcome()
    // {
    //     $title = config('app.name');

    //     return view('welcome', compact('title'));
    // }

    public function welcome()
    {

        $title = config('app.name');
        return view('welcome', [
            "title" => "Ciao! Questo e il mio blog",
            "description" => "Benvenuti nel mio blog Laravel! Qui 
        troverete una raccolta delle mie esperienze,
        conoscenze e risorse nel mondo dello sviluppo web con Laravel."
        ]);
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


    public function article(Article $article)
    {
        return view('pages.article', ['article' => $article]);
    }
}
