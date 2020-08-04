<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivilegioRepositorio extends Model
{
    protected $table = 'privilegiorepositorio';
    protected $fillable = ['idgrupo','idrepositorio','idprivilegio'];
    protected $primaryKey = ['idgrupo','idrepositorio'];
}
