<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EspecialidadMedico extends Model
{
    protected $table = 'especialidadmedico';
    protected $fillable = ['idmedico','idespecialidad'];
    protected $primaryKey = ['idmedico','idespecialidad'];
}
