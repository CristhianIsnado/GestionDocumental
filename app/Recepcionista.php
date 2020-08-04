<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recepcionista extends Model
{
    protected $table = 'recepcionista';
    protected $fillable = ['id','idusuario','codigorecepcionista','iddepartamento'];
    protected $primaryKey = 'id';
}
