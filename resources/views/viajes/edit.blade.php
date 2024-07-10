<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Viaje</h1>
    <form method="POST" action="{{ route('viajes.update', $viaje) }}">
        @csrf
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" value="{{ $viaje->codigo }}">

        <label for="num_plazas">Número de Plazas:</label>
        <input type="number" name="num_plazas" id="num_plazas" value="{{ $viaje->num_plazas }}">

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" value="{{ $viaje->fecha }}">

        <label for="otros_datos">Otros Datos:</label>
        <textarea name="otros_datos" id="otros_datos">{{ $viaje->otros_datos }}</textarea>

        <label for="viajero_id">Viajero:</label>
        <select name="viajero_id" id="viajero_id">
            @foreach ($viajeros as $viajero)
                <option value="{{ $viajero->id }}" @if($viaje->viajero_id == $viajero->id) selected @endif>{{ $viajero->nombre }}</option>
            @endforeach
        </select>

        <label for="origen_id">Origen:</label>
        <select name="origen_id" id="origen_id">
            @foreach ($origenes as $origen)
                <option value="{{ $origen->id }}" @if($viaje->origen_id == $origen->id) selected @endif>{{ $origen->nombre }}</option>
            @endforeach
        </select>

        <label for="destino_id">Destino:</label>
        <select name="destino_id" id="destino_id">
            @foreach ($destinos as $destino)
                <option value="{{ $destino->id }}" @if($viaje->destino_id == $destino->id) selected @endif>{{ $destino->nombre }}</option>
            @endforeach
        </select>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>