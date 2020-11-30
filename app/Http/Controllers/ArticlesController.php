<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController extends Controller
{

    public function index()
    {
        //renders a list of all items
        $articles = \App\Models\Article::paginate(10);

        return view("articles.index", [
            "articles" => $articles,
        ]);
    }

    public function show(Article $article)
    { //shows a specific item

        return view('articles.show', ["article" => $article]);
    }

    public function create()
    {
        return view("articles.create");

    }

    public function store()
    {
        //validation
        $validatedAttributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255'],
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        Article::create($validatedAttributes);

        /* Article::create([
        'title'->request("title"),
        'excerpt'->request("excerpt"),
        'body'->request("excerpt"),
        ]);
         */
        //stores/persists the recently created item or edited one
        /* dump(request()->all()); */
        /* $article = new Article();
        $article->title = request("title");
        $article->excerpt = request("excerpt");
        $article->body = request("body");
        $article->save(); */

        return redirect("/articles");

    }
    public function edit(Article $article)
    {
        //edit an existing article

        // $article = Article::find($id);

        return view("articles.edit", [
            'article' => $article,
        ]);
    }
    public function update(Article $article)
    {

        //deletes article
        // $article = Article::find($id);
        $article->title = request("title");
        $article->excerpt = request("excerpt");
        $article->body = request("body");
        $article->save();
        return redirect('/articles/' . $article->id);

    }
    public function destroy()
    {
        //deletes article

    }
}
