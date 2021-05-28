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

        $rules = [
            'nom_empresa' => 'required'
            ,'ruc_empresa'=> 'required|unique:empresa,ruc_empresa'
            ,'correo_empresa'=>'required|email|unique:empresa,correo_empresa'
            ,'tel_empresa'=>'required|numeric'
            ,'contacto_empresa'=> 'required'
        ];
        $messages = [
            'nom_empresa.required' => 'El campo empresa en requerido.',
            'ruc_empresa.required' => 'El campo RUC en requerido.',
            'ruc_empresa.unique' => 'El RUC ingresado ya exite.',
            'correo_empresa.required' => 'El campo correo en requerido.',
            'correo_empresa.unique' => 'El correo ingresado ya existe.',
            'tel_empresa.required' => 'El campo telefono es requerido.',
            'tel_empresa.numeric' => 'No se puede ingresar letras en telefono.',
            'contacto_empresa.required' => 'El campo contacto en requerido.'
        ];

        $this->validate($request, $rules, $messages);
      

        $empresa = new Empresa($request->input());
        
        
        if($empresa->saveOrFail()){

            return redirect()->route('empresa.create')->with('success','Datos Guardados');
        }else{

            return redirect()->route('empresa.create')->with('error','Ocurrio algo al guardar los datos');
        }

    }
  
    public function show(Empresa $empresa){
        
        return view("general/Empresa.editar",["empresa" => $empresa]);

    }


   public function update(Request $request, Empresa $empresa){

    $rules = [
        'nom_empresa' => 'required'
        ,'ruc_empresa'=> 'required|unique:empresa,ruc_empresa,'.$empresa->cod_empresa.',cod_empresa'
        ,'correo_empresa'=>'required|email|unique:empresa,correo_empresa,'.$empresa->cod_empresa.',cod_empresa'
        ,'tel_empresa'=>'required|numeric'
        ,'contacto_empresa'=> 'required'
    ];
    $messages = [
        'nom_empresa.required' => 'El campo empresa en requerido.',
        'ruc_empresa.required' => 'El campo RUC en requerido.',
        'ruc_empresa.unique' => 'El RUC ingresado ya exite.',
        'correo_empresa.required' => 'El campo correo en requerido.',
        'correo_empresa.unique' => 'El correo ingresado ya existe.',
        'tel_empresa.requered' => 'El campo telefono es requerido.',
        'tel_empresa.numeric' => 'No se puede ingresar letras en telefono.',
        'contacto_empresa.required' => 'El campo contacto en requerido.'
    ];

    $this->validate($request, $rules, $messages);


    $empresa->fill($request->input())->saveOrFail();
    return redirect()->route('empresa.show',[$empresa])->with('success','Datos Guardados');
   }
    
   public function eliminar(Empresa $empresa){

    $empresa->delete();
    return redirect()->route('empresa.index');
   }


}