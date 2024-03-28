<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class ArticleController extends Controller
{
    public function create()
    {

        return "Sono in create";
        /* 1° metodo
        $article = new Article();

        $article->title = 'Perché JS è migliore di PHP';
        $article->category = 'Dev';
        $article->description = '...';

        $article->save();
        */

        /* 2° metodo */
        // Article::create([
        //     'title' => 'A me non piace nessuno dei due',
        //     'category' => 'Tempo libero' ,
        //     'description' => '...',
        // ]);

    }
}