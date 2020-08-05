<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $table = 'tema';
    protected $fillable = ['id','tema','colortitulo','colormenu','colorfuentetitulo',
        'colorfuentemenu','tamañofuentetitulo','tamañofuentemenu'];
    protected $primaryKey = 'id';
}
