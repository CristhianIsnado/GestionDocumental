<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table = 'archivo';
    protected $fillable = ['id','nombre','idtipodearchivo','version'];
    protected $primaryKey = 'id';
}
