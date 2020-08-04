<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repositorio extends Model
{
    protected $table = 'repositorio';
    protected $fillable = ['id','nombre','direccion'];
    protected $primaryKey = 'id';
}
