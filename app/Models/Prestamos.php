<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    use HasFactory;
    protected $fillable = [
        'libro_id',
        'cliente_id',
        'fecha_prestamo',
        'dias_prestamo',
        'estado'
    ];

    protected $table = 'prestamos';
}
