<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Empresa;

class EmpresasController extends Controller
{


    public function listarEmpresa(){
        $lista=Empresa::all();

        return view('general/Empresa/lista');

    }
   
    public function crearEmpresa(){
        
    }
   

    public function editarUsuarios(){
        
    }
  

    public function eliminarUsuarios(){
        
    }
    
}