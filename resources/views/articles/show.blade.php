@extends('layout.app')
@section('main')
    <h2>{{$article->title}}</h2>
    <p>{{$article->body}}</p>
    <div>Categoria: {{($article->category ? $article->category->name : '')}}</div>
@endsection