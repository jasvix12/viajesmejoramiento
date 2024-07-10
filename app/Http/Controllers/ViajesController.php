<?php

namespace App\Http\Controllers;

use App\Models\destinos;
use App\Models\origenes;
use App\Models\viajeros;
use App\Models\viajes;
use Illuminate\Http\Request;

class ViajesController extends Controller
{
    public function index()
    {
        $viajes = viajes::with(['viajero', 'origen', 'destino'])->get();
        return view('viajes.index', compact('viajes'));
    }

    public function create()
    {
        $viajeros = viajeros::all();
        $origenes = origenes::all();
        $destinos = destinos::all();
        return view('viajes.create', compact('viajeros', 'origenes', 'destinos'));
    }

    public function store(Request $request)
    {
        viajes::create($request->all());
        return redirect()->route('viajes.index');
    }

    public function show(viajes $viaje)
    {
        return view('viajes.show', compact('viaje'));
    }

    public function edit(viajes $viaje)
    {
        $viajeros = Viajeros::all();
        $origenes = Origenes::all();
        $destinos = Destinos::all();
        return view('viajes.edit', compact('viaje', 'viajeros', 'origenes', 'destinos'));
    }

    public function update(Request $request, Viajes $viaje)
    {
        $viaje->update($request->all());
        return redirect()->route('viajes.index');
    }

    public function destroy(Viajes $viaje)
    {
        $viaje->delete();
        return redirect()->route('viajes.index');
    }
}
