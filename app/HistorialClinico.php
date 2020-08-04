<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistorialClinico extends Model
{
    protected $table = 'historialclinico';
    protected $fillable = ['id','rutpaciente','nombre','descripcion','fecha','recetado'];
    protected $primaryKey = 'id';
}
