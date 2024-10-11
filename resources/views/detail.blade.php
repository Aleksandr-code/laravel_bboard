@extends('layots.app')

@section('title', $board->title)

@section('content')
    <h2>{{ $board->title }}</h2>
    <p>{{ $board->content }}</p>
    <p>{{ $board->price }} руб.</p>
    <p><a href="{{route('index')}}">На перечень объявлений</a></p>
@endsection
