<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title or 'Curso de Laravel 5.32 Especializa TI' }}</title>
</head>
<body>

    @yield('content')

    @stack('scripts')

</body>
</html>
