@extends('layouts.base')
@section('title', 'Добавление объявления :: Мои объявления')
@section('main')
<p><a href="{{ route('home') }}">На перечень моих объявлений</a><i class="bi bi-arrow-return-left"></i></p>
    <form action="{{ route('bb.store') }}" method="POST">
        @csrf
        <div class="form-group mt-2">
            <label for="txtTitle"><span style="color: red"> * </span>Наименование</label>
            <input name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
            @error('title')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="txtContent"><span style="color: red"> * </span>Описание</label>
            <textarea name="content" id="txtContent" class="form-control @error('content') is-invalid @enderror" row="3">{{ old('content') }}</textarea>
            @error('content')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="txtPrice"><span style="color: red"> * </span>Цена</label>
            <input name="price" id="txtPrice" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
            @error('price')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary mt-2" value="Добавить">
    </form>
@endsection