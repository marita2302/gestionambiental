<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    //
    protected $table = 'sucursales';
    protected $primaryKey = 'cod_sucursal';
    public $timestamps = false;
    protected $fillable = ['cod_empresa','dir_sucursal','con_sucursal','telf_sucursal','correo_sucursal'];

}
