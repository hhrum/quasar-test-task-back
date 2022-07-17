<!doctype html>
<html lang="en">
<head>
    <!-- CSS only -->
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Onboarding</title>
</head>
<body>
<ul class="nav justify-content-center bg-dark">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{route('admin.boards.index')}}">Главная</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{route('admin.boards.create')}}">Добавить</a>
    </li>
</ul>
<div class="container-xl mt-3">
    @yield('content')
</div>
</body>
</html>
