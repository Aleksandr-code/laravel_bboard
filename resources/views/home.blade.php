@extends('layouts.app')

@section('title', 'Мои объявления')

@section('content')
    <h2>Добро пожаловать, {{ Auth::user()->name }}!</h2>
    <p class="text-end"><a href="{{ route('board.create') }}">Добавить объявление</a></p>
    @if (count($boards) > 0)
        <table class="table table-striped table-borderless">
            <thead>
            <tr>
                <th>Товар</th>
                <th>Цена, руб.</th>
                <th colspan="2">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($boards as $board)
                <tr>
                    <td><h3>{{ $board->title }}</h3></td>
                    <td>{{ $board->price }}</td>
                    <td>
                        <a href="{{ route('board.edit', ['board' => $board->id]) }}">Изменить</a>
                    </td>
                    <td>
                        <a href="{{ route('board.delete', ['board' => $board->id]) }}">Удалить</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection('content')
