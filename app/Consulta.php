<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $table = 'consulta';
    protected $fillable = ['id','rutpaciente','idserviciomedico','fechadeconsulta','horadeconsulta',
        'estado','observacion','idmedico','idrecepcionista'];
    protected $primaryKey = 'id';
}
