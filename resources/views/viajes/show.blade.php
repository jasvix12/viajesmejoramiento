<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalle del Viaje</h1>
    <p><strong>Código:</strong> {{ $viaje->codigo }}</p>
    <p><strong>Número de Plazas:</strong> {{ $viaje->num_plazas }}</p>
    <p><strong>Fecha:</strong> {{ $viaje->fecha }}</p>
    <p><strong>Otros Datos:</strong> {{ $viaje->otros_datos }}</p>
    <p><strong>Viajero:</strong> {{ $viaje->viajero->nombre }}</p>
    <p><strong>Origen:</strong> {{ $viaje->origen->nombre }}</p>
    <p><strong>Destino:</strong> {{ $viaje->destino->nombre }}</p>
    <a href="{{ route('viajes.edit', $viaje) }}">Editar</a>
    <form method="POST" action="{{ route('viajes.destroy', $viaje) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>