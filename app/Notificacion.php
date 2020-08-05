<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    protected $table = 'notificacion';
    protected $fillable = ['id','idusuario','nombre','descripcion','fecha','hora'];
    protected $primaryKey = 'id';
}
