<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepositorioDelArchivo extends Model
{
    protected $table = 'repositoriodelarchivo';
    protected $fillable = ['idrepositorio','idarchivo'];
    protected $primaryKey = ['idrepositorio','idarchivo'];
}
