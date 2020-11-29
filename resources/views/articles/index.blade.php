@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>All articles</h2>
                </div>
                <div id="">
                    <ul class="style1">
                        @foreach ($articles as $article)

                            <li class="first">
                                <a href="/articles/{{ $article->id }}">
                                    <h3>{{ $article->title }}</h3>
                                </a>
                                <p><a href="#">{{ $article->excerpt }}</a></p>
                            </li>
                        @endforeach
                    </ul>
                    <div id="stwo-col">
                        <div class="sbox1">
                            <h2>Etiam rhoncus</h2>
                            <ul class="style2">
                                <li><a href="#">Semper quis egetmi dolore</a></li>
                                <li><a href="#">Quam turpis feugiat dolor</a></li>
                                <li><a href="#">Amet ornare hendrerit lectus</a></li>
                                <li><a href="#">Quam turpis feugiat dolor</a></li>
                            </ul>
                        </div>
                        <div class="sbox2">
                            <h2>Integer gravida</h2>
                            <ul class="style2">
                                <li><a href="#">Semper quis egetmi dolore</a></li>
                                <li><a href="#">Quam turpis feugiat dolor</a></li>
                                <li><a href="#">Consequat lorem phasellus</a></li>
                                <li><a href="#">Amet turpis feugiat amet</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
