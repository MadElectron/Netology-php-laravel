<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Добавить контакт | Записная книжка</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="container">
        <h1>Добавить контакт</h1>
        <hr>
        <form action="/add" method="post" accept-charset="utf-8">
            {{ csrf_field() }}
            <input type="text" name="surname" value="" placeholder="Фамилия" required>
            <input type="text" name="name" value="" placeholder="Имя" required>
            <input type="text" name="patronymic" value="" placeholder="Отчество" required>
            <textarea name="phones" placeholder="Телефоны (через запятую)"></textarea>
            <button type="submit" name="submit">Добавить</button>
        </form>
    </div>
</body>
</html>