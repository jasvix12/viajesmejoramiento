<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Viajeros</h1>
    <a href="{{ route('viajeros.create') }}">Crear Nuevo Viajero</a>
    <ul>
        @foreach ($viajeros as $viajero)
            <li>{{ $viajero->nombre }} - <a href="{{ route('viajeros.show', $viajero) }}">Ver</a></li>
        @endforeach
    </ul>
</body>
</html>