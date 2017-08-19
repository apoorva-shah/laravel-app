@extends('app')

@section('content')
    <h1>{{ $article->title }}</h1>

    <article>
        {{ $article->body }}
    </article>
    <hr/>
    {{--@foreach($articles as $article)
        <article>
            <h2>
                <a href="#">
                    {{ $article->title }}
                </a>
            </h2>

            <div class="body">{{ $article->body }}</div>
        </article>
    @endforeach--}}
@stop
