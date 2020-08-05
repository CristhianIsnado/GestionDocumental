<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medico';
    protected $fillable = ['id','codigomedico','iddepartamento','profesion'];
    protected $primaryKey = 'id';
}
