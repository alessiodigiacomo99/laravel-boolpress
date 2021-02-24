@extends('layout.app')
@section('main')

<button>
    <a href="{{ route('articles.create') }}">crea nuovi articoli</a>
</button>

@foreach($articles as $article)
    <div>
        <h2>{{$article->title}}</h2>
        <p>{{$article->body}}</p>
        <div>created at: {{$article->created_at}}</div>
        <div>updated at: {{$article->updated_at}}</div>
        <a href="{{route('articles.show', $article->id)}}">vedi</a>
        <a href="{{route('articles.edit', $article->id)}}">edita</a>
        <form action="{{route('articles.destroy', ['article' => $article->id] )}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach

@endsection