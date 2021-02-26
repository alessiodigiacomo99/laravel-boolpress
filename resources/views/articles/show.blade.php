@extends('layout.app')
@section('main')
    <h2>{{$article->title}}</h2>
    <p>{{$article->body}}</p>
    <div>Categoria: {{($article->category ? $article->category->name : '')}}</div>
    <div>Tags: 
        @if( count($article->tags) > 0)
            @foreach($article->tags as $tag)
                {{ $tag->name }}
            @endforeach
        @else
            non ho inserito nessun tag
        @endif
    </div>
@endsection