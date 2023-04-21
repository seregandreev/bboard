@extends('layouts.base')
@section('title', $bb->title)
@section('main')
        <h2>{{ $bb->title }}</h2>
        <p>{{ $bb->content }}</p>
        <p>{{ $bb->price }} руб.</p>
        @if($bb->user_id)
                <p>Автор: {{ $bb->user->name }}</p>
        @endif
        <p><a href="{{ route('index') }}">На перечень объявлений</a></p>
@endsection('main')