<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Редактировать контакт | Записная книжка</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="container">
        <h1>Редактировать контакт: {{ $contact->surname }} {{ $contact->name }} {{ $contact->patronymic }}</h1>
        <hr>
        <form action="/update" method="post" accept-charset="utf-8">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $contact->id }}">
            <input type="text" name="surname" value="{{ $contact->surname }}" placeholder="Фамилия" required>
            <input type="text" name="name" value="{{ $contact->name }}" placeholder="Имя" required>
            <input type="text" name="patronymic" value="{{ $contact->patronymic }}" placeholder="Отчество" required>
            <textarea name="phones" placeholder="Телефоны (через запятую)">{{ implode(',', array_column($contact->phones->toArray(), 'phone')) }}</textarea>
            <button type="submit" name="submit">Обновить</button>
        </form>
    </div>
</body>
</html>