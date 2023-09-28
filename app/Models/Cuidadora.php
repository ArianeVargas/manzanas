<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidadora extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoDoc',
        'documento',
        'nombre',
        'apellido',
        'telefono',
        'correo',
        'ciudad',
        'direccion',
        'servicioInteres',
        'servicio_id',
    ];

    public function servicio()
    
    {
        return $this->belongsTo(Servicio::class);
    }
}
