@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    @if(count($boards) > 0)
    <table class="table table-striped table-borderless">
        <thead>
        <tr>
            <th>Товар</th>
            <th>Цена, руб.</th>
            <th>&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        @foreach($boards as $board)
        <tr>
            <td><h4>{{$board->title}}</h4></td>
            <td>{{$board->price}}</td>
            <td>
                <a href="{{route('detail', ['board' => $board->id])}}">Подробнее...</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endif
@endsection
