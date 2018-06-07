<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    protected $table = 'suscripcion';
    protected $fillable = [
        'nombre','correo', 'edad', 'genero', 'distribuidor', 'rfc', 'numdistribuidor'
    ];
}
