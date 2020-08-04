<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preferencias extends Model
{
    protected $table = 'preferencias';
    protected $fillable = ['idusuario','idtema','nombre','colortitulo','colormenu',
        'colorfuentetitulo','colorfuentemenu','tamañofuentetitulo','tamañofuentemenu'];
    protected $primaryKey = ['idusuario','idtema'];
}
