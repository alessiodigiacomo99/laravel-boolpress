@extends('layout.app')
@section('main')
<div id="app">
    <category-component></category-component>
</div>
@endsection
@section('footer')
<script src="{{ asset('js/app.js') }}"></script>
@endsection