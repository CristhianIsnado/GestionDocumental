<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privilegio extends Model
{
    protected $table = 'privilegio';
    protected $fillable = ['id','nombre','descripcion'];
    protected $primaryKey = 'id';
}
