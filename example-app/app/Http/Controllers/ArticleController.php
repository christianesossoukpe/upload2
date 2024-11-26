<?php

namespace App\Http\Controllers;

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
        return response()->json($articles, 200);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return "Créaton";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Rechercher l'article avec l'ID donné
        $article = Article::find($id);
    
        // Vérifier si l'article existe
        if (!$article) {
            return response()->json(['message' => 'Article non trouvé'], 404);
        }
    
        // Retourner l'article
        return response()->json($article, 200);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }

    public function getArticles()
{
    $articles = Article::paginate(10); // 10 articles par page
    return response()->json($articles);
}

}
