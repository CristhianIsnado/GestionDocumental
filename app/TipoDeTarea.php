<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDeTarea extends Model
{
    protected $table = 'tipodetarea';
    protected $fillable = ['id','nombre'];
    protected $primaryKey = 'id';
}
