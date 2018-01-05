@extends('base')

@section('title', 'Записная книжка')

@section('content')

    @include('upper_nav')

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
                    <form action="{{ route('edit_contact', ['id' => $contact->id]) }}" method="get" accept-charset="utf-8">
                        <button type="submit">Изменить</button>
                    </form>    
                    <form action="{{ route('delete') }}" method="post" accept-charset="utf-8">
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

@endsection