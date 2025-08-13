<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $table = 'ventas'; // Si el nombre no sigue la convención

    public $timestamps = false; // Porque no tienes campos created_at ni updated_at

    protected $fillable = [
        'Usuario',
        'Cantidad',
        'Productos',
        'Total',
        'fecha_venta',
    ];
}
