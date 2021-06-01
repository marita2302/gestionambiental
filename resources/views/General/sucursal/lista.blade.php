@extends('menu/menu')

@section('head')
<script src="{{asset('js\eliminar.js')}}"></script>
<!--Tag para el titulo de la vista-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
    <h1 class="page-header text-overflow">Sucursal</h1>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--navegación-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<ol class="breadcrumb">
    <li><a href="#"><i class="demo-pli-home"></i></a></li>
    <li><a href="#">Sucursal</a></li>
    <li class="active">Lista Sucursales</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



@endsection


@section('body')
<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Listado de Sucursales</h3>
      
    </div>
    <div class="panel-body">
        <a class="btn btn-success btn-icon btn-new" href="{{ route('sucursal.create') }}" title="Agregar"><i class="fa fa-plus icon-lg"></i> Agregar</a>

        <table id="demo-dt-basic" class="table table-striped table-bordered " cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>COD SUCURSAL</th>
                    <th>COD EMPRESA</th>
                    <th>DIRECCIÓN</th>
                    <th>CONTACTO</th>
                    <th>TELÉFONO</th>
                    <th>CORREO</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sucursal as $item)
                    
                <tr>
                    <td>{{$item->cod_sucursal}}</td>
                    <td>{{$item->cod_empresa}}</td>
                    <td>{{$item->dir_sucursal}}</td>
                    <td>{{$item->con_sucursal}}</td>
                    <td>{{$item->telf_sucursal}}</td>
                    <td>{{$item->correo_sucursal}}</td>
                   
                    <td>
                    <!--<a class="btn-eliminar" onclick="eliminarDato('{{route('empresaDelete',$item) }}','{{$item->nom_empresa}}' )"  > <i class="fa fa-trash-o delete" aria-hidden="true"></i></a>
                    <a class="btn-eliminar" href="{{route('empresa.show',$item)}}" > <i class="fa fa-pencil-square-o " aria-hidden="true"></i></a>
                    -->
                    </td>

                    
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection