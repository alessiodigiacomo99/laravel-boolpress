@extends('layout.app')
@section('header')

@endsection
@section('main')
<div id="app">
    <example-component></example-component>
</div>
@endsection
@section('footer')
<script src="{{ asset('js/app.js') }}"></script>
@endsection