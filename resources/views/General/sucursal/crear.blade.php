@extends('menu/menu')
@section('head')
<!--Tag para el titulo de la vista-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<script src="{{asset('js\sisambiental.js')}}"></script>

<div id="page-title">
    <h1 class="page-header text-overflow">Sucursal</h1>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--navegación-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<ol class="breadcrumb">
    <li><a href="#"><i class="demo-pli-home"></i></a></li>
    <li><a href="#">Sucursal</a></li>
    <li><a href="{{url('/empresa/')}}">Lista</a></li>
    <li class="active">Crear Sucursal</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@endsection

@section('body')
<div class="panel">
    <div class="panel-heading">
    <h3 class="panel-title">Formulario registro de Sucursales</h3>
    </div>
@if ($message = Session::get('error'))
<script>
error();
<script>
@endif
    <div class="panel-body">
 
        <div class="panel panel-bordered panel-mint">
            <div class="panel-heading">
@if ($message = Session::get('success'))
<script>
success();
</script>       
@endif
                <h3 class="panel-title">   <h3 class="panel-title">Crear Sucursales</h3></h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{route('sucursal.store') }}">
                    @csrf
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                               <div class="form-group">
                                <label class="control-label">Empresa</label>
                            </div>
                           
                            <input type="text" name="nombreEmpresa" id="nombreEmpresa" class="form-control" readonly >
                            <input type="text" name="cod_empresa" id="idEmpresa" class="" value="{{old('cod_empresa')}}" hidden="true">
                               </div>
                               <div class="col-sm-6">
                                <div class="form-group select">
                                    <label class="control-label">Escoge la Empresa</label><br>
                                    <select name="" id="cod_empresa" onchange="ShowSelected();">
                                    <option value="0" selected disabled>Elegir Empresa</option>
                                    @foreach ($listaEmpresa as $option)
                                    <option value="{{$option->cod_empresa}}">{{$option->nom_empresa}}</option>
                                    @endforeach
                                    </select>
                                  
                                    <span class="text-danger">{{ $errors->first('cod_empresa') }}</span>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">CORREO</label>
                                    <input type="email" name="correo_sucursal" class="form-control" value="{{old('correo_sucursal')}}">
                                    <span class="text-danger">{{ $errors->first('correo_sucursal') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">TELEFONO</label>
                                    <input type="tel" name="telf_sucursal" class="form-control" value="{{old('telf_sucursal')}}">
                                    <span class="text-danger">{{ $errors->first('telf_sucursal') }}</span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">CONSULTOR SUCURSAL</label>
                                    <input type="text" name="con_sucursal" class="form-control" value="{{old('con_sucursal')}}">
                                    <span class="text-danger">{{ $errors->first('con_sucursal') }}</span>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">DIRECCION</label>
                                    <textarea name="dir_sucursal" rows="4" class="form-control">{{old('dir_sucursal')}}</textarea>
                                    <span class="text-danger">{{ $errors->first('dir_sucursal') }}</span>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <div class=" text-left">
                        <button class="btn btn-success" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
                    </div>
                </form>
            </div>
        </div>
       
    </div>

</div>

<script>
function ShowSelected()
{
/* Para obtener el valor */
var inputId=document.getElementById("idEmpresa");
var cod = document.getElementById("cod_empresa").value;

inputId.value=cod;
 
/* Para obtener el texto */
var inputNombre=document.getElementById("nombreEmpresa");
var combo = document.getElementById("cod_empresa");
var selected = combo.options[combo.selectedIndex].text;

inputNombre.value=selected;
}



</script>
@endsection