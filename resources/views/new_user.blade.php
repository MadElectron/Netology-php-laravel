@extends('base')

@section('title', 'Добавить контакт')

@section('content')

    <form action="{{ route('add') }}" method="post" accept-charset="utf-8">
        {{ csrf_field() }}
        <input type="text" name="surname" value="" placeholder="Фамилия" required>
        <input type="text" name="name" value="" placeholder="Имя" required>
        <input type="text" name="patronymic" value="" placeholder="Отчество" required>
        <textarea name="phones" placeholder="Телефоны (через запятую)"></textarea>
        <button type="submit" name="submit">Добавить</button>
    </form>

@endsection