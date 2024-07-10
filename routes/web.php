<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViajerosController;
use App\Http\Controllers\ViajesController;


Route::resource('viajeros', ViajerosController::class);
Route::resource('viajes', ViajesController::class);


