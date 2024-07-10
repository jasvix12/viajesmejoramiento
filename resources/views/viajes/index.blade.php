<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Viajes</h1>
    <a href="{{ route('viajes.create') }}">Crear Nuevo Viaje</a>
    <ul>
        @foreach ($viajes as $viaje)
            <li>{{ $viaje->codigo }} - {{ $viaje->viajero->nombre }} - {{ $viaje->origen->nombre }} -> {{ $viaje->destino->nombre }} - <a href="{{ route('viajes.show', $viaje) }}">Ver</a></li>
        @endforeach
    </ul>
</body>
</html>