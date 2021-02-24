@extends('layout.app')
@section('header')

@endsection
@section('main')
<div id="app">
    <example-component></example-component>
    <category-component></category-component>
    <tag-component></tag-component>
</div>
@endsection
@section('footer')
<script src="{{ asset('js/app.js') }}"></script>
@endsection