@extends('layouts.app')

@section('title', 'Удаление объявления :: Мои объявления')

@section('content')
    <h2>{{ $board->title }}</h2>
    <p>{{ $board->content }}</p>
    <p>{{ $board->price }} руб.</p>
    <p>Автор: {{ $board->user->name }}</p>
    <form action="{{ route('board.destroy', ['board' => $board->id]) }}"
          method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Удалить">
    </form>
    <p><a href="{{route('home')}}">На перечень объявлений</a></p>
@endsection
