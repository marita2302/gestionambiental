@extends('menu/menu')
@section('head')
<!--Tag para el titulo de la vista-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<script src="{{asset('js\sisambiental.js')}}"></script>

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
    <li class="active">Crear Empresa</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@endsection

@section('body')
<div class="panel">
    <div class="panel-heading">
    <h3 class="panel-title">Formulario registro de Empresas</h3>
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
                <h3 class="panel-title">   <h3 class="panel-title">Crear Empresas</h3></h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{route('empresa.store') }}">
                    @csrf
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">EMPRESA</label>
                                    <input type="text" name="empresa" class="form-control" value="{{old('empresa')}}" >
                                    <span class="text-danger">{{ $errors->first('empresa') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">RUC</label>
                                    <input type="text" name="ruc" class="form-control" value="{{old('ruc')}}">
                                    <span class="text-danger">{{ $errors->first('ruc') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">CORREO</label>
                                    <input type="email" name="correo" class="form-control" value="{{old('correo')}}">
                                    <span class="text-danger">{{ $errors->first('correo') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label">TELEFONO</label>
                                    <input type="tel" name="telefono" class="form-control" value="{{old('telefono')}}">
                                    <span class="text-danger">{{ $errors->first('telefono') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">CONTACTO EMPRESA</label>
                                    <input type="text" name="contacto" class="form-control" value="{{old('contacto')}}">
                                    <span class="text-danger">{{ $errors->first('contacto') }}</span>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">CONSULTOR EMPRESA</label>
                                    <input type="text" name="consultor" class="form-control" value="{{old('consultor')}}">
                                    <span class="text-danger">{{ $errors->first('consultor') }}</span>
                                </div>
                            </div>
                           
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="control-label">DIRECCION</label>
                                    <textarea name="direccion" rows="4" class="form-control">{{old('direccion')}}</textarea>
                                    <span class="text-danger">{{ $errors->first('direccion') }}</span>
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