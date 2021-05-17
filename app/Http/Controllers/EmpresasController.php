<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresasController extends Controller
{


    public function index(){
        $lista=Empresa::all();
        return view('general/Empresa.lista', ['empresa' => $lista]);


    }
   
    public function create()
    {
        return view('general/Empresa.crear');

    }


    public function store(Request $request){
        $request->validate([
            'empresa' => 'required'
            ,'ruc'=> 'required|unique:empresa,ruc_empresa'
            ,'correo'=>'required|email|unique:empresa,correo_empresa'
            ,'telefono'=>'required|numeric'
            ,'contacto'=> 'required'
     
        ]);

        $empresa = new Empresa([
            'nom_empresa'=>$request->post('empresa')
            ,'ruc_empresa'=>$request->post('ruc')
            ,'dir_empresa'=>$request->post('direccion')
            ,'contacto_empresa'=>$request->post('contacto')
            ,'tel_empresa'=>$request->post('telefono')
            ,'correo_empresa'=>$request->post('correo')
            ,'consultor_empresa'=>$request->post('consultor')
            

        ]);
        
        if($empresa->save()){

            return redirect()->route('empresa.create')->with('success','Datos Guardados');
        }else{

            return redirect()->route('empresa.create')->with('error','Ocurrio algo al guardar los datos');
        }

    }
  

    public function eliminarUsuarios(){
        
    }
    
}