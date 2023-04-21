@extends('layouts.base')
@section('title', 'Удаление объявления :: Мои объявления')
@section('main')
        <p><a href="{{ route('home') }}">На перечень моих объявлений</a></p>
        <h2>{{ $bb->title }}</h2>
        <p>{{ $bb->content }}</p>
        <p>{{ $bb->price }} руб.</p>
        @if($bb->user_id)
                <p>Автор: {{ $bb->user->name }}</p>
        @endif
        <form action="{{ route('bb.destroy', ['bb' => $bb->id]) }}"
                method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="Удалить">
        </form>
@endsection('main')