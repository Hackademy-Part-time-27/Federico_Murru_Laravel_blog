<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\controller\Category;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;


class ArticleController extends Controller
{

    public function index()
    {
        return view('articles.index', ['articles' => Article::all()]);
    }

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

        return view('articles.create', ['categories' => \App\Models\Category::all()]);
    }
    public function store(StoreArticleRequest $request)
    {
        // dd($request->all());
        $article = Article::create($request->all());

        // Qui ci assicuriamo che il file esista e sia stato caricato correttamente
        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $extension = $request->file('image')->extension();

            $fileName = 'image.' . $extension;

            $fileName = $request->file('image')->getClientOriginalName();

            $fileName = uniqid('image_') . '.' . $extension;

            // storeAs restituisce il percorso relativo, a partire da storage/app, del file salvato su disco
            $article->image = $request->file('image')->storeAs('public/images/' . $article->id, $fileName);

            $article->save();
        }

        return redirect()->route('articles.index')->with(['success' => 'Articolo creato correttamente!']);
    }

    public function edit(Article $article)
    {
        return view('articles.edit', [
            'article' => $article,
            'categories' => \App\Models\Category::all()
        ]);
    }

    public function update(StoreArticleRequest $request, Article $article)
    {
        $article->update($request->all());
        return redirect()->route('articles.index')->with('success', 'Articolo aggiornato con successo.');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Articolo cancellato con successo.');
    }
}




// ['title' => 'Perché JS è migliore di PHP', 'category' => 'Categoria: Programmazione JS', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', "visible" => true],
// ['title' => 'Perché PHP è migliore di JS', 'category' => 'Categoria: Programmazione PHP', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', "visible" => true],
// ['title' => 'A me non piace nessuno dei due', 'category' => 'Categoria: Programmazione generica', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', "visible" => true],
