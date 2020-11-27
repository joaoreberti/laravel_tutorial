<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function show($slug)
    {

/*         $posts = ["my-first-post" => "This is my first post", "my-second-post" => "This is my SECOND post"];
 */
/*         $post = ;
 */
        /*  dd($post); */
        /* if(!$post){
        abort(404);
        } */

        /* if (!array_key_exists($slug, $posts)) {
        abort(404, "Sorry that post was not found");
        } */

        return view("post", ['post' => Post::where('slug', $slug)->firstOrFail()->body]);

    }
}
