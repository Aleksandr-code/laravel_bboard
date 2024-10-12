@extends('layouts.app')

@section('title', 'Мои объявления')

@section('content')
    <p class="text-end"><a href="">Добавить объявление</a></p>
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
                        <a href="">Изменить</a>
                    </td>
                    <td>
                        <a href="">Удалить</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection('content')
