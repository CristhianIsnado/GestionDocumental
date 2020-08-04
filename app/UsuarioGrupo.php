<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioGrupo extends Model
{
    protected $table = 'usuariogrupo';
    protected $fillable = ['idusuario','idgrupo'];
    protected $primaryKey = ['idusuario','idgrupo'];
}
