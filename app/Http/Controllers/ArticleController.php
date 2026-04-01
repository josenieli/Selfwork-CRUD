<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AricleEditRequest;
use App\Http\Requests\ArticleCreateRequest;
use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleCreateRequest $request, Article $article)
    {
        if ($request->hasFile('img')) {
        $img = $request->file('img')->store('img', 'public');
        } else {
        $img = null;
        }
        Article::create([
            'titolo'=> $request->titolo,
            'autore'=> $request->autore,
            'descrizione'=> $request->descrizione,
            'prezzo'=> $request->prezzo,
            'img'=> $img
        ]);
        return redirect()->back()->with('message', 'articolo inserito con successo');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AricleEditRequest $request, Article $article)
    {
        $article->update([
            $article->titolo = $request->titolo,
            $article->autore = $request->autore,
            $article->descrizione = $request->descrizione,
            $article->prezzo = $request->prezzo
        ]);
        if($request->img){
            $request->validate(['img'=>'image']);
                        $article->update([
                $article->img = $request->file('img')->store('img', 'public')
            ]);
        }
        return redirect()->route('home')->with('message', 'articolo modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('home')->with('message', 'articolo eliminato con successo');
    }
}
