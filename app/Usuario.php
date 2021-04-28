<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $table = 'usuarios';
    protected $primaryKey = 'cod_usuario';
    public $timestamps = false;
    protected $fillable = ['nom_usuario','ci_usuario','dir_usuario','tel_usuario','cod_empresa','fecha_dia','udu_aud'];
}
