<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viajes extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'num_plazas', 'fecha', 'otros_datos', 'viajero_id', 'origen_id', 'destino_id'];

    public function viajero()
    {
        return $this->belongsTo(viajeros::class);
    }

    public function origen()
    {
        return $this->belongsTo(origenes::class);
    }

    public function destino()
    {
        return $this->belongsTo(destinos::class);
    }
}
