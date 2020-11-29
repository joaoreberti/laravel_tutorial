@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">New article</h1>
        </div>
        <form method="POST" action="/articles">
            @csrf
            <div class="field">
                <label class="label" for="title">Title</label>
                <div class="control">
                    <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" id="title"
                        required />
                    @if ($errors->has('title'))
                        <div class="help is-danger">{{ $errors->first('title') }}</div>

                    @endif
                </div>
            </div>
            <div class="field">
                <label class="label" for="excertp">Excerpt</label>
                <div class="control">
                    <input class="input" type="textarea" name="excerpt" id="excerpt" required />
                    @if ($errors->has('excerpt'))
                        <div class="help is-danger">{{ $errors->first('excerpt') }}</div>

                    @endif
                </div>
            </div>
            <div class="field">
                <label class="label" for="body">Body</label>
                <div class="control">
                    <input class="input" type="textarea" name="body" id="body" required />
                    @if ($errors->has('body'))
                        <div class="help is-danger">{{ $errors->first('body') }}</div>

                    @endif
                </div>
            </div>
            <div class="field is-grouped">
                <div class="control"> <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
