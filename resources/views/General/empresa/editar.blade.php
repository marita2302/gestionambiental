@extends('menu/menu')
@section('head')
<!--Tag para el titulo de la vista-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<script src="{{asset('js\sisambiental.js')}}"></script>
<script src="{{asset('js\eliminar.js')}}"></script>

<div id="page-title">
    <h1 class="page-header text-overflow">Empresa</h1>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--navegación-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<ol class="breadcrumb">
    <li><a href="#"><i class="demo-pli-home"></i></a></li>
    <li><a href="#">Empresa</a></li>
    <li><a href="{{url('/empresa/')}}">Lista</a></li>
    <li class="active">Editar Empresa</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@endsection

@section('body')
<div class="panel">
    <div class="panel-heading">
    <h3 class="panel-title">Formulario Editar Empresas</h3>
    </div>
@if ($message = Session::get('error'))
<script>
error();
<script>
@endif
@if ($message = Session::get('success'))
<script>
success();
</script>       
@endif
    <div class="panel-body">
        <a class="btn btn-success btn-icon btn-new" href="{{ route('empresa.create') }}" title="Agregar"><i class="fa fa-plus icon-lg"></i> Agregar</a>
        <a class="btn btn-danger btn-icon btn-new " onclick="eliminarDato('{{route('empresaDelete',$empresa) }}','{{$empresa->nom_empresa}}' )"  > <i class="fa fa-trash-o " aria-hidden="true"> Eliminar</i></a>
                    
        <div class="panel panel-bordered panel-mint">
        
            <div class="panel-heading">

                <h3 class="panel-title">   <h3 class="panel-title">Editar Empresas</h3></h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{route("empresa.update", [$empresa])}}" >
                    @method("PUT")
                    @csrf
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">EMPRESA</label>
                                    <input type="text" name="nom_empresa" class="form-control" value="{{$empresa->nom_empresa}}" >
                                    <span class="text-danger">{{ $errors->first('nom_empresa') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">RUC</label>
                                    <input type="text" name="ruc_empresa" class="form-control" value="{{$empresa->ruc_empresa}}">
                                    <span class="text-danger">{{ $errors->first('ruc_empresa') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">CORREO</label>
                                    <input type="email" name="correo_empresa" class="form-control" value="{{$empresa->correo_empresa}}">
                                    <span class="text-danger">{{ $errors->first('correo_empresa') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">TELEFONO</label>
                                    <input type="tel" name="tel_empresa" class="form-control" value="{{$empresa->tel_empresa}}">
                                    <span class="text-danger">{{ $errors->first('tel_empresa') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">CONTACTO EMPRESA</label>
                                    <input type="text" name="contacto_empresa" class="form-control" value="{{$empresa->contacto_empresa}}">
                                    <span class="text-danger">{{ $errors->first('contacto_empresa') }}</span>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">CONSULTOR EMPRESA</label>
                                    <input type="text" name="consultor_empresa" class="form-control" value="{{$empresa->consultor_empresa}}">
                                    <span class="text-danger">{{ $errors->first('consultor_empresa') }}</span>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">DIRECCION</label>
                                    <textarea name="dir_empresa" rows="4" class="form-control"> {{$empresa->dir_empresa}}</textarea>
                                    <span class="text-danger">{{ $errors->first('dir_empresa') }}</span>
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

@endsection