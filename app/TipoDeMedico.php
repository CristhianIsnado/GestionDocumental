<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDeMedico extends Model
{
    protected $table = 'TipoDeMedico';
    protected $fillable = ['id','tipodemedico'];
    protected $primaryKey = 'id';
}
