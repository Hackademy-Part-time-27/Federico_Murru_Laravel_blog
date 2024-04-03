<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;


class ArticleController extends Controller
{
    public function create()
    {
        ///1° metodo
        // $article = new Article();

        // $article->title = 'Perché JS è migliore di PHP';
        // $article->category = 'Dev';
        // $article->description = '...';

        // $article->save();

        /* 2° metodo */

        // Article::create([
        //     'title' => 'Perché PHP è migliore di JS',
        //     'category' => 'Programmazione PHP',
        //     'description' => '...',
        // ]);

        // Article::create([
        //     'title' => 'A me non piace nessuno dei due',
        //     'category' => 'Tempo libero',
        //     'description' => '...',
        // ]);

        return view('articles.create');
    }
    public function store(StoreArticleRequest $request)
    {
        Article::create($request->all());
        return redirect()->back()->with(['success' => 'Articolo creato correttamente!']);
    }
}


// ['title' => 'Perché JS è migliore di PHP', 'category' => 'Categoria: Programmazione JS', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', "visible" => true],
// ['title' => 'Perché PHP è migliore di JS', 'category' => 'Categoria: Programmazione PHP', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', "visible" => true],
// ['title' => 'A me non piace nessuno dei due', 'category' => 'Categoria: Programmazione generica', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', "visible" => true],
