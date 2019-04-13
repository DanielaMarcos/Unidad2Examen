<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table = 'Empleados';
    protected $primaryKey='id_empleado';
    protected $fillable = ['nombre','apellido','direccion','codigo_postal','telefono','empresa'];
}
