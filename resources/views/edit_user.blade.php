@extends('base')

@section('title', "Редактировать контакт: {$contact->surname} {$contact->name} {$contact->patronymic}")

@section('content')

    <form action="{{ route('update') }}" method="post" accept-charset="utf-8">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $contact->id }}">
        <input type="text" name="surname" value="{{ $contact->surname }}" placeholder="Фамилия" required>
        <input type="text" name="name" value="{{ $contact->name }}" placeholder="Имя" required>
        <input type="text" name="patronymic" value="{{ $contact->patronymic }}" placeholder="Отчество" required>
        <textarea name="phones" placeholder="Телефоны (через запятую)">{{ implode(',', array_column($contact->phones->toArray(), 'phone')) }}</textarea>
        <button type="submit" name="submit">Обновить</button>
    </form>

@endsection