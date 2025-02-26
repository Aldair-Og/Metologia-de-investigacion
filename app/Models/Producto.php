<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'productos';  // Asegúrate de que este nombre coincida con el de tu tabla en la base de datos

    // Los campos que se pueden llenar masivamente
    protected $fillable = [
        'nombre',
        'precio',
        'descripcion',
    ];

    // Si tienes una columna de timestamps en tu base de datos, como 'created_at' y 'updated_at', no es necesario declararlas, Laravel las maneja automáticamente
    public $timestamps = true;
}
