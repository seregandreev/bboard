@extends('layouts.base')
@section('title', 'Правка объявления :: Мои объявления')
@section('main')
    <p><a href="{{ route('home') }}">На перечень моих объявлений</a></p>
    <form action="{{ route('bb.update', ['bb' => $bb->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group mt-2">
            <label for="txtTitle">Наименование</label>
            <input name="title" id="txtTitle" class="form-control" value="{{ $bb->title }}">
        </div>
        <div class="form-group mt-2">
            <label for="txtContent">Описание</label>
            <textarea name="content" id="txtContent" class="form-control" row="3">{{ $bb->content }}</textarea>
        </div>
        <div class="form-group mt-2">
            <label for="txtPrice">Цена</label>
            <input name="price" id="txtPrice" class="form-control" value="{{ $bb->price }}">
        </div>
        <input type="submit" class="btn btn-primary mt-2" value="Сохранить">
    </form>
@endsection