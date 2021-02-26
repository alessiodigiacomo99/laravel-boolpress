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

        <div class="form-group">
            <label for="tags">Tags</label>
            <select name="tags[]" id="tags" multiple>
                @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="categories">categories</label>
            <select name="category_id" id="categories">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Add Post</button>
    </form>
@endsection
