<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioMedico extends Model
{
    protected $table = 'serviciomedico';
    protected $fillable = ['id','serviciomedico','descripcion'];
    protected $primaryKey = 'id';
}
