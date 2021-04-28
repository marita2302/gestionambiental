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
    <li class="active">Crear Empresa</li>
</ol>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


@endsection


@section('body')

<div class="row">
    <div class="col-sm-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Formulario de ejemplo</h3>
            </div>

            <!--Block Styled Form -->
            <!--===================================================-->
            <form>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Firstname</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Lastname</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Website</label>
                                <input type="url" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-8">
                        <select data-placeholder="Seleccione.." id="demo-chosen-select" tabindex="2">
                            <option value="United States">Dato 1</option>
                            <option value="United Kingdom">Dato...</option>
                            <option value="United Kingdom">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, magni.</option>
                        </select>
                    </div>

                </div>
                </div>
               

                <div class="panel-footer text-right">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>
            <!--===================================================-->
            <!--End Block Styled Form -->

        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Horizontal form</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->
            <form class="form-horizontal">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="demo-hor-inputemail">Email</label>
                        <div class="col-sm-9">
                            <input type="email" placeholder="Email" id="demo-hor-inputemail" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="demo-hor-inputpass">Password</label>
                        <div class="col-sm-9">
                            <input type="password" placeholder="Password" id="demo-hor-inputpass" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <input id="demo-remember-me-2" class="magic-checkbox" type="checkbox">
                            <label for="demo-remember-me-2">Remember me</label>
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-right">
                    <button class="btn btn-success" type="submit">Sign in</button>
                </div>
            </form>
            <!--===================================================-->
            <!--End Horizontal Form-->

        </div>
    </div>
</div>

@endsection