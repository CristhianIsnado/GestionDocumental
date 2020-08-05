<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDeArchivo extends Model
{
    protected $table = 'tipodearchivo';
    protected $fillable = ['id','nombre'];
    protected $primaryKey = 'id';
}
