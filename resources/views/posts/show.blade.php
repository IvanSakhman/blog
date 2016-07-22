@extends('layouts.app')

@section('content')
    <h1>Title: {{ $post->title }}</h1>
    <br>
    <p>Body: {{ $post->body }}</p>
@stop