<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sucursal;
use App\Empresa;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lista=Sucursal::all();
       
        return view('general/Sucursal.lista', ['sucursal' => $lista]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $empresaCbx=Empresa::all();
        return view('general/Sucursal.crear',['listaEmpresa'=>$empresaCbx]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $rules = [
            'cod_empresa' => 'required',
            'nombreEmpresa'=>'required'
           
            ,'correo_sucursal'=>'required|email|unique:sucursales,correo_sucursal'
            ,'telf_sucursal'=>'required|numeric'
            ,'con_sucursal'=> 'required'
        ];
        $messages = [
            'cod_empresa.required' => 'El campo empresa en requerido.',
            'nombreEmpresa.required' => 'El campo empresa en requerido.',
           
            'correo_sucursal.required' => 'El campo correo en requerido.',
            'correo_sucursal.unique' => 'El correo ingresado ya existe.',
            'telf_sucursal.required' => 'El campo telefono es requerido.',
            'telf_sucursal.numeric' => 'No se puede ingresar letras en telefono.',
            'con_sucursal.required' => 'El campo consultor en requerido.'
        ];
        $this->validate($request, $rules, $messages);
      

        $sucursal = new Sucursal($request->input());
        if($sucursal->saveOrFail()){

            return redirect()->route('sucursal.create')->with('success','Datos Guardados');
        }else{

            return redirect()->route('sucursal.create')->with('error','Ocurrio algo al guardar los datos');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
