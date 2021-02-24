@extends('layout.app')
@section('main')
    <form action="{{route('articles.store')}}" method="post">
        @csrf
        @method('POST')
        <div>
            <label for="title">titolo</label>
            <input type="text" name="title" id="">
        </div>

        <div>
            <label for="body">Body</label>
            <textarea name="body" id="" cols="30" rows="10"></textarea>
        </div>

        <button type="submit">Add Post</button>
    </form>
@endsection
