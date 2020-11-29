<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController extends Controller
{

    public function index()
    {
        //renders a list of all items
        $articles = \App\Models\Article::paginate(2);

        return view("articles.index", [
            "articles" => $articles,
        ]);
    }

    public function show($id)
    { //shows a specific item
        $article = Article::find($id);

        return view('articles.show', ["article" => $article]);
    }

    public function create()
    {
        //creates a new item

    }

    public function store()
    {
        //stores/persists the recently created item or edited one
    }
    public function edit()
    {
        //edit an existing article

    }

    public function destroy()
    {
        //deletes article

    }
}
