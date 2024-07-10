<?php

namespace App\Http\Controllers;

use App\Models\viajeros;
use Illuminate\Http\Request;

class ViajerosController extends Controller
{
    public function index()
    {
        $viajeros = viajeros::all();
        return view('viajeros.index', compact('viajeros'));
    }

    public function create()
    {
        return view('viajeros.create');
    }

    public function store(Request $request)
    {
        viajeros::create($request->all());
        return redirect()->route('viajeros.index');
    }

    public function show(viajeros $viajero)
    {
        return view('viajeros.show', compact('viajero'));
    }

    public function edit(viajeros $viajero)
    {
        return view('viajeros.edit', compact('viajero'));
    }

    public function update(Request $request, viajeros $viajero)
    {
        $viajero->update($request->all());
        return redirect()->route('viajeros.index');
    }

    public function destroy(viajeros $viajero)
    {
        $viajero->delete();
        return redirect()->route('viajeros.index');
    }
}
