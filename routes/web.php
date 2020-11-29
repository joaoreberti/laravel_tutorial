<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    /* $article = App\Models\Article::all(); */

/* $article = App\Models\Article::take(2)->get(); */
/*     $article = App\Models\Article::paginate(2);*/
    $article = App\Models\Article::latest()->get();

    return view('about', [
        'articles' => $article,
    ]);
});

Route::get('/test', function () {
    $name = request("name");

    return view('test', [
        "name" => $name,
    ]);
});

Route::get("posts/{post}", [PostsController::class, 'show']);

Route::get("/articles/{article}", [ArticlesController::class, "show"]);

Route::get("/articles", [ArticlesController::class, "index"]);
