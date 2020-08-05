<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroMedico extends Model
{
    protected $table = 'centromedico';
    protected $fillable = ['id','idlocalidad','nombre','direccion','fechadeinauguracion'];
    protected $primaryKey = 'id';
}
