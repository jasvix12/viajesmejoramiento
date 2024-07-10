<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viajeros extends Model
{
    use HasFactory;

    protected $fillable = ['dni', 'nombre', 'direccion', 'tfno'];

    public function viajes()
    {
        return $this->hasMany(viajes::class);
    }
}
