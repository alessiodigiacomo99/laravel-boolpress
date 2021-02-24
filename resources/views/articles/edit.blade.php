@extends('layout.app')
@section('main')
<form action="{{route('articles.update',['article' => $article->id] )}}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label for="title">titolo</label>
        <input type="text" name="title" id="" value="{{$article->title}}">
    </div>

    <div>
        <label for="body">Body</label>
        <textarea name="body" id="" cols="30" rows="10">{{$article->body}}</textarea>
    </div>

    <div>
        <label for="{{($article->category ? $article->category->name : '')}}">categoria</label>
        <input type="text" name="{{($article->category ? $article->category->name : '')}}" id="" value="{{($article->category ? $article->category->name : '')}}">
    </div>

    <button type="submit">Edit article</button>
</form>
