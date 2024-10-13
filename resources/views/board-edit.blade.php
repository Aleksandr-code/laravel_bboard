@extends('layouts.app')

@section('title', 'Правка объявления :: Мои объявления')

@section('content')
    <form action="{{ route('board.update', ['board' => $board->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="txtTitle" class="form-label">Товар</label>
            <input name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror"
                   value="{{ old('title', $board->title) }}">
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="txtContent" class="form-label">Описание</label>
            <textarea name="content" id="txtContent" class="form-control @error('content') is-invalid @enderror"
                      row="3">{{ old('content', $board->content) }}</textarea>
            @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="txtPrice" class="form-label">Цена</label>
            <input name="price" id="txtPrice" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $board->price) }}">
            @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary" value="Сохранить">
    </form>
@endsection('content')
