<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;

    protected $primaryKey = 'IdProyecto';
    protected $fillable = ['IdCiudad', 'IdDepartamento','Nombre', 'Direccion', 'Imagen', 'Estado', 'AporteTotal'];
}
