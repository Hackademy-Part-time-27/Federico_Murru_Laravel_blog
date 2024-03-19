<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public $articles;
    public function __construct()
    {
        $this->articles = [
            ['title' => 'Perché JS è migliore di PHP', 'category' => 'Categoria: Programmazione JS', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
            ['title' => 'Perché PHP è migliore di JS', 'category' => 'Categoria: Programmazione PHP', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
            ['title' => 'A me non piace nessuno dei due', 'category' => 'Categoria: Programmazione generica', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'],
        ];
    }


    public function welcome()
    {
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
        return view(
            'pages.articles',
            ['articles' => $this->articles],
            ["title" => "Articoli",]
        );
    }
    public function article($id)
    {
        return view('pages.article', ['article' => $this->articles[$id]]);
    }
}
