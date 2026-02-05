<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body class="container">

    <header>
        <a href="/index">
            <h1>Laravelを使ったCRUD機能の実装</h1>
        </a>
    </header>

    <!-- slotで子の位置を決める -->
    {{ $slot }}

    <footer>
        <small>Laravel@test.curriculum</small>
    </footer>
</body>

</html>
