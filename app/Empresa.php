<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $table = 'empresa';
    protected $primaryKey = 'cod_empresa';
    public $timestamps = false;
    protected $fillable = ['nom_empresa','ruc_empresa','dir_empresa','contacto_empresa','tel_empresa','correo_empresa','consultor_empresa'];
}
