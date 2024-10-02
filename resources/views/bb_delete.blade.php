@extends('layouts.base')
@section('title', 'Удаление объявления:: Мои объявления')
@section('main')
    <p><strong>Товар:</strong> {{$bb->title}}</p>
    <p><strong>Описание:</strong> {{$bb->content}}</p>
    <p><strong>Цена:</strong> {{$bb->price}} руб.</p>
    <p><strong>Автор:</strong> {{$bb->user->name}} </p>
    <form action="{{route('bb.destroy', ['bb'=>$bb->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger" value="Удалить">
    </form>
@endsection('main')

