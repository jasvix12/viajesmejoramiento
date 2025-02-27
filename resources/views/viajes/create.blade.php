<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear Nuevo Viaje</h1>
    <form method="POST" action="{{ route('viajes.store') }}">
        @csrf
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo">

        <label for="num_plazas">Número de Plazas:</label>
        <input type="number" name="num_plazas" id="num_plazas">

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha">

        <label for="otros_datos">Otros Datos:</label>
        <textarea name="otros_datos" id="otros_datos"></textarea>

        <label for="viajero_id">Viajero:</label>
        <select name="viajero_id" id="viajero_id">
            @foreach ($viajeros as $viajero)
                <option value="{{ $viajero->id }}">{{ $viajero->nombre }}</option>
            @endforeach
        </select>

        <label for="origen_id">Origen:</label>
        <select name="origen_id" id="origen_id">
            @foreach ($origenes as $origen)
                <option value="{{ $origen->id }}">{{ $origen->nombre }}</option>
            @endforeach
        </select>

        <label for="destino_id">Destino:</label>
        <select name="destino_id" id="destino_id">
            @foreach ($destinos as $destino)
                <option value="{{ $destino->id }}">{{ $destino->nombre }}</option>
            @endforeach
        </select>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>