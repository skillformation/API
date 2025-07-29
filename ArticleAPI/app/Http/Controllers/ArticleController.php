<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Afficher une liste article
     */
    public function index()
    {
        $articles=Article::all();
        return response()->json([
            'success'=>true,
            'articles'=>$articles
            
        ]);
    }


    /**
     * Creation d'une ressources de le storage.
     */
    public function store(Request $request)
    {
        //Validation des données
        $validateData=$request->validate([
            'title'=>'required|string|max:255',
            'content'=>'required',
            'published'=>'boolean',
        ]);
        //Creation d'une article
        $article=Article::create($validateData);

        //Confirmation de article au format json
        return response()->json([
            'success'=>true,
            'message'=>'Article crée avec succés',
            'article'=>$article
            
        ],201);

    }

    /**
     * Afficher une donnée.
     */
    public function show(Article $article)
    {
        return response()->json([
            'success'=>true,
            'article'=>$article
            
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //Validation des données
        $validateData=$request->validate([
            'title'=>'required|string|max:255',
            'content'=>'required',
            'published'=>'boolean',
        ]);
        //Mettre a jour en fonction de l'id.
        $article=Article::update($validateData)->find($article->id);

        //Confirmation de article au format json
        return response()->json([
            'success'=>true,
            'message'=>'Article modifier avec succés',
            'article'=>$article
            
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
