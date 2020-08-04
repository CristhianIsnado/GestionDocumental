<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadato extends Model
{
    protected $table = 'metadato';
    protected $fillable = ['id','titulo','fechadecreacion','descripcion','tamañoenbyte','fechadeultimamodificacion'];
    protected $primaryKey = 'id';
}
