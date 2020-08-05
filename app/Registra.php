<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registra extends Model
{
    protected $table = 'registra';
    protected $fillable = ['idcentromedico','rutpaciente','fecharegistro','idrecepcionista'];
    protected $primaryKey = 'id';
}
