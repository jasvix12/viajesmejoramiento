<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Viajero</h1>
    <form method="POST" action="{{ route('viajeros.update', $viajero) }}">
        @csrf
        @method('PUT')
        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni" value="{{ $viajero->dni }}">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $viajero->nombre }}">

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" id="direccion" value="{{ $viajero->direccion }}">

        <label for="tfno">Teléfono:</label>
        <input type="text" name="tfno" id="tfno" value="{{ $viajero->tfno }}">

        <button type="submit">Guardar</button>
    </form>
</body>
</html>