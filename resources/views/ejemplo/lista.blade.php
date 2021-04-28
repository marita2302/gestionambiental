@extends('menu/menu')

@section('head')
<!--Tag para el titulo de la vista-->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div id="page-title">
    <h1 class="page-header text-overflow">Vista ejemplo</h1>
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
        <h3 class="panel-title">Pagina de ejemplo lista de datos</h3>
    </div>
    <div class="panel-body">
        <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>COLUMNA</th>
                    <th>COLUMNA</th>
                    <th>COLUMNA</th>
                    <th>COLUMNA</th>
                    <th>COLUMNA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>DATOS</td>
                    <td>DATOS</td>
                    <td>DATOS</td>
                    <td>DATOS</td>
                    <td>DATOS</td>
                    <td>DATOS</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>

@endsection