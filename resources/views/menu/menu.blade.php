<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Gestón Ambiental </title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('css\bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css\nifty.min.css')}}" rel="stylesheet">
    <link href="{{asset('\css\sambiental.css')}}" rel="stylesheet">
    <link href="{{asset('css\demo\nifty-demo-icons.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('plugins\pace\pace.min.css')}}" rel="stylesheet">
    <script src="{{asset('plugins\pace\pace.min.js')}}"></script>
    <link href="{{asset('css\demo\nifty-demo.min.css')}}" rel="stylesheet">


        
</head>

<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">
                        <img src="\img\logo.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">Ambiente</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->



                       

                    </ul>
                    <ul class="nav navbar-top-links">





                        <!--NOTIFICACIONES MENU-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="demo-pli-bell"></i>
                                <span class="badge badge-header badge-danger"></span>
                            </a>
                         <!--END NOTIFICACIONES MENU-->
                           <!--opciones notificaciones-->
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                <div class="nano scrollable">
                                    <div class="nano-content">
                                        <ul class="head-list">
                                            <li>
                                                <a href="#" class="media add-tooltip" data-title="Used space : 95%" data-container="body" data-placement="bottom">
                                                    <div class="media-left">
                                                        <i class="demo-pli-data-settings icon-2x text-main"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="text-nowrap text-main text-semibold">Notificación</p>
                                                        <div class="progress progress-sm mar-no">
                                                            <div style="width: 95%;" class="progress-bar progress-bar-danger">
                                                                <span class="sr-only">L</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                           
                                           
                                        
                                           
                                        </ul>
                                    </div>
                                </div>

                                <!-- footer notificaciones-->
                                <div class="pad-all bord-top">
                                    <a href="#" class="btn-link text-main box-block">
                                        <i class="pci-chevron chevron-right pull-right"></i>MOSTRAR PANEL NOTIFICACIONES
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End opciones notificaciones-->



                        <!--User menu-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    
                                    
                                    <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                                   
                                    <i class="demo-pli-male"></i>
                                </span>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--Nombre user.-->
                                <div class="username hidden-xs">Jefferson</div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            </a>


                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                                <ul class="head-list">
                                    <li>
                                        <a href="#"><i class="demo-pli-male icon-lg icon-fw"></i> Perfil</a>
                                    </li>
                                    
                                   
                                    <li>
                                        <a href="#"><i class="demo-pli-computer-secure icon-lg icon-fw"></i> Bloquear </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="demo-pli-unlock icon-lg icon-fw"></i> Salir del sistema</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user menu-->
 
                        
                        
                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">

                <div id="page-head">
                @yield('head')
                    
              
                </div>

                
                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">
                    
                @yield('body')

						
                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->


            
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">

 <!--Menu-->
                    <!--================================-->
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">

                                <!--Profile Widget-->
                                <!--================================-->
                                <div id="mainnav-profile" class="mainnav-profile">
                                    <div class="profile-wrap text-center">
                                        <div class="pad-btm">
                                            <img class="img-circle img-md" src="\img\profile-photos\1.png" alt="Profile Picture">
                                        </div>
                                        <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                            <span class="pull-right dropdown-toggle">
                                                <i class="dropdown-caret"></i>
                                            </span>
                                            <p class="mnp-name">Jefferson Gordon</p>
                                            <span class="mnp-desc">jgordon@flexiplast.com</span>
                                        </a>
                                    </div>
                                    <div id="profile-nav" class="collapse list-group bg-trans">
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-male icon-lg icon-fw"></i> Ver Perfil
                                        </a>
                                        
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-information icon-lg icon-fw"></i> Ayuda
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="demo-pli-unlock icon-lg icon-fw"></i> Salir del sistema
                                        </a>
                                    </div>
                                </div>


                                <!--Shortcut buttons-->
                                <!--================================-->
                                <div id="mainnav-shortcut" class="hidden">
                                    <ul class="list-unstyled shortcut-wrap">
                                        <li class="col-xs-3" data-content="My Profile">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                                <i class="demo-pli-male"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Messages">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                                <i class="demo-pli-speech-bubble-3"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Activity">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                <i class="demo-pli-thunder"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Lock Screen">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                                <i class="demo-pli-lock-2"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--================================-->
                                <!--End shortcut buttons-->


                                <ul id="mainnav-menu" class="list-group">
						
						            <!--Category name-->
						            <li class="list-header">Administración</li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="demo-pli-home"></i>
						                    <span class="menu-title">Principal</span>
											
						                </a>
						
						              
						            </li>
						
						           
						
						            <!--Menu list item-->
						            <li>
						                <a href="widgets.html">
						                    <i class="demo-pli-gear"></i>
						                    <span class="menu-title">
												Gestión de Usuarios
												
											</span>
						                </a>
						            </li>
                                    <li>
						                <a href="{{url('/empresa/')}}">
						                    <i class="demo-pli-gear"></i>
						                    <span class="menu-title">
												Gestión de Empresas
												
											</span>
						                </a>
						            </li>
						

						            <li class="list-divider"></li>
						
						            <!--Category name-->
						            <li class="list-header">Configuración Inicial</li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="fa fa-building"></i>
						                    <span class="menu-title">Empresa</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="">Listar Empresa</a></li>
                                            <li><a href="">Listar Sucursales</a></li>
											
						                </ul>
						            </li>
                                      <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="fa fa-user"></i>
						                    <span class="menu-title">Usuarios</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="">Listar Usuarios</a></li>
                                           
											
						                </ul>
						            </li>
                                    


						
						            <li class="list-divider"></li>
						
						            <!--Category name-->
						            <li class="list-header">Módulo Gestíon Ambiental</li>
						
						            <!--Menu list item-->
						            <li>
						                <a href="#">
						                    <i class="fa fa-recycle"></i>
						                    <span class="menu-title">Residuos</span>
											<i class="arrow"></i>
						                </a>
						
						                <!--Submenu-->
						                <ul class="collapse">
						                    <li><a href="">Categorías</a></li>
											<li><a href="">Contenedores</a></li>
											
											
						                </ul>
						            </li>
						        

                            </div>
                        </div>
                    </div>
                    <!--================================-->
                    <!--End menu-->

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>

        

        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer">

           


            <!-- Visible when footer positions are static -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">
                Desarrollado por  <strong></strong> 
            </div>



            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

            <p class="pad-lft">&#0169; 2021 Gestion Ambiental</p>



        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->


    
    
    
    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="{{asset('js\jquery.min.js')}}"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{asset('js\bootstrap.min.js')}}"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{asset('js\nifty.min.js')}}"></script>




    <!--=================================================-->
    
    
    

</body>
</html>
