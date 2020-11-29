@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Update Article</h1>
        </div>
        <form method="POST" action="/articles/{{ $article->id }}">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                    <input class="input" type="text" name="title" id="title" value="{{ $article->title }}" />
                </div>
            </div>
            <div class="field">
                <label class="label" for="excertp">Excerpt</label>
                <div class="control">
                    <input class="input" type="textarea" name="excerpt" id="excerpt" value="{{ $article->excerpt }}" />
                </div>
            </div>
            <div class="field">
                <label class="label" for="body">Body</label>
                <div class="control">
                    <input class="input" type="textarea" name="body" id="body" value="{{ $article->body }}" />
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control"> <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
