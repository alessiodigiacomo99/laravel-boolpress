@extends('layout.app')
@section('main')
<div id="app">
    <tag-component></tag-component>
</div>
@endsection
@section('footer')
<script src="{{ asset('js/app.js') }}"></script>
@endsection