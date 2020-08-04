<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Collection;


class Usuario extends Model
{

    public function getDateOfBirthAttribute($value){
        return Carbon::parse($value)->format('m/d/Y');
    }

    public function formDateOfBirthAttribute($value){
        return Carbon::parse($value)->formtat('Y-m-d');
    }

    protected $table = 'usuario';
    protected $fillable = ['id','ceduladeidentidad','nombres','apellidopaterno','apellidomaterno','genero','idresidencia','estadocivil',
        'direccion','fechadenacimiento','gradodeinstruccion','correoelectronico','idresidencia'];
    protected $primaryKey = 'id';
}
