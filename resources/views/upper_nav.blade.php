<div class="upper-nav">
    <a href="{{ route('new_contact') }}">Добавить контакт</a>
    <div class="search">
        <form action="{{ route('index') }}" method="get" accept-charset="utf-8">
            <input type="text" name="search_string" value="" placeholder="Введите параметр поиска">
            <button type="submit" value="submit">Найти</button>
        </form>
    </div>
</div>