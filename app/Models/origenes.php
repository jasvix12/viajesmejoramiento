<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class origenes extends Model
{
    use HasFactory;

    protected $fillable = ['codigo', 'nombre', 'otros_datos'];

    public function viajes()
    {
        return $this->hasMany(viajes::class);
    }
}
