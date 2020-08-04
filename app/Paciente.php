<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Collection;


class Paciente extends Model
{

    public function getDateOfBirthAttribute($value){
        return Carbon::parse($value)->format('m/d/Y');
    }

    public function formDateOfBirthAttribute($value){
        return Carbon::parse($value)->formtat('Y-m-d');
    }

    protected $table = 'paciente';
    protected $fillable = ['rut','ceduladeidentidad','nombres','apellidopaterno','apellidomaterno',
        'genero','estadocivil','direccion','fechanacimiento','gradoinstruccion','correoelectronico',
        'idresidencia','ocupacion','telefono'];
    protected $primaryKey = 'rut';
}
