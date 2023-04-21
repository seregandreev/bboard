@extends('layouts.base')
@section('title', 'Добавление объявления :: Мои объявления')
@section('main')
<p><a href="{{ route('home') }}">На перечень моих объявлений</a><i class="bi bi-arrow-return-left"></i></p>
    <form action="{{ route('bb.store') }}" method="POST">
        @csrf
        <div class="form-group mt-2">
            <label for="txtTitle">Наименование</label>
            <input name="title" id="txtTitle" class="form-control">
        </div>
        <div class="form-group mt-2">
            <label for="txtContent">Описание</label>
            <textarea name="content" id="txtContent" class="form-control" row="3"></textarea>
        </div>
        <div class="form-group mt-2">
            <label for="txtPrice">Цена</label>
            <input name="price" id="txtPrice" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary mt-2" value="Добавить">
    </form>
@endsection