<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Detalle del Viajero</h1>
    <p><strong>DNI:</strong> {{ $viajero->dni }}</p>
    <p><strong>Nombre:</strong> {{ $viajero->nombre }}</p>
    <p><strong>Dirección:</strong> {{ $viajero->direccion }}</p>
    <p><strong>Teléfono:</strong> {{ $viajero->tfno }}</p>
    <a href="{{ route('viajeros.edit', $viajero) }}">Editar</a>
    <form method="POST" action="{{ route('viajeros.destroy', $viajero) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>