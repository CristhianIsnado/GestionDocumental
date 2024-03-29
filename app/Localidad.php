<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'localidad';
    protected $fillable = ['id','pais','departamento','ciudad'];
    protected $primaryKey = 'id';
}
