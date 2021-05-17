@extends('menu/menu')

@section('head')
<!--Tag para el titulo de la vista-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
    <h1 class="page-header text-overflow">Empresa</h1>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--navegación-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<ol class="breadcrumb">
    <li><a href="#"><i class="demo-pli-home"></i></a></li>
    <li><a href="#">Empresa</a></li>
    <li class="active">Lista Empresa</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



@endsection


@section('body')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Listado de Empresas</h3>
      
    </div>
    <div class="panel-body">
        <a href="{{ route('empresa.create') }}" title="Agregar"> <button class="btn btn-success btn-icon"><i class="fa fa-plus icon-lg"></i></button></a>
        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>COD</th>
                    <th>EMPRESA</th>
                    <th>RUC</th>
                    <th>DIRECCIÓN</th>
                    <th>CONTACTO</th>
                    <th>TELÉFONO</th>
                    <th>CORREO</th>
                    <th>CONSULTOR</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empresa as $item)
                    
                <tr>
                    <td>{{$item->cod_empresa}}</td>
                    <td>{{$item->nom_empresa}}</td>
                    <td>{{$item->ruc_empresa}}</td>
                    <td>{{$item->dir_empresa}}</td>
                    <td>{{$item->contacto_empresa}}</td>
                    <td>{{$item->tel_empresa}}</td>
                    <td>{{$item->correo_empresa}}</td>
                    <td>{{$item->consultor_empresa}}</td>

                    
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection