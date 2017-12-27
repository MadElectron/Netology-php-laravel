<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Записная книжка</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="container">
        <h1 class="title"><a href="/">Записная книжка</a></h1>
        <hr>
        <div class="upper-nav">
            <a href="/new">Добавить контакт</a>
            <div class="search">
                <form action="/" method="get" accept-charset="utf-8">
                    <input type="text" name="search_string" value="" placeholder="Введите параметр поиска">
                    <button type="submit" value="submit">Найти</button>
                </form>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>№ п/п</th>
                    <th>id контакта</th>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Телефоны</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $index => $contact)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->surname }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->patronymic }}</td>
                    <td>
                        @foreach ($contact->phones as $phone)
                            {{ $phone->phone }}<br>
                        @endforeach
                    </td>
                    <td>
                        <form action="edit/{{ $contact->id }}" method="get" accept-charset="utf-8">
                            <button type="submit">Изменить</button>
                        </form>    
                        <form action="delete" method="post" accept-charset="utf-8">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="id" value="{{ $contact->id }}">
                            <button type="submit">Удалить</button>
                        </form>
                    
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>