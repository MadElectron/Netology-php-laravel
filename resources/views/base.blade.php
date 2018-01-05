<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="container">
        <h1 class="title"><a href="{{ route('index') }}">@yield('title')</a></h1>
        <hr>

        @yield('content')

    </div>
</body>
</html>