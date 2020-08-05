<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradoDeInstruccion extends Model
{
    protected $table = 'gradodeinstruccion';
    protected $fillable = ['id','grado'];
    protected $primaryKey = 'id';
}
