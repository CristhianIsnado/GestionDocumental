<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioTarea extends Model
{
    protected $table = 'usuariotarea';
    protected $fillable = ['idusuario','idtarea'];
    protected $primaryKey = ['idusuario','idtarea'];
}
