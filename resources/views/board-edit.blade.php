@extends('layouts.app')

@section('title', 'Правка объявления :: Мои объявления')

@section('content')
    <form action="{{ route('board.update', ['board' => $board->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="txtTitle" class="form-label">Товар</label>
            <input name="title" id="txtTitle" class="form-control" value="{{ $board->title }}">
        </div>
        <div class="mb-3">
            <label for="txtContent" class="form-label">Описание</label>
            <textarea name="content" id="txtContent" class="form-control"
                      row="3">{{ $board->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="txtPrice" class="form-label">Цена</label>
            <input name="price" id="txtPrice" class="form-control" value="{{ $board->price }}">
        </div>
        <input type="submit" class="btn btn-primary" value="Сохранить">
    </form>
@endsection('content')
