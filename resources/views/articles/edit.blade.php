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

    <div class="form-group">
        <label for="tags">Tags</label>
        <select name="tags[]" id="tags" multiple>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="category_id">category</label>
        <select name="category_id" id="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Edit article</button>
</form>
@endsection
@section('footer')
<script src="{{ asset('js/app.js') }}"></script>
@endsection