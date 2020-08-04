<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tarea';
    protected $fillable = ['id','idtipodetarea','nombre','descripcion','fechadecreacion',
        'fechadefinalizacion','horadefinalizacion','finalizado'];
    protected $primaryKey = 'id';
}
