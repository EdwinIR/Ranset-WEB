<html lang="es"><head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>.: Pedidos :.</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS -->
    <link href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled.min.css" rel="stylesheet">
    
    <style>
        .bg-skin-lp {
            background-image: url('https://cdn.slidesharecdn.com/ss_thumbnails/argentinos-130329194756-phpapp02-thumbnail-4.jpg?cb=1364586516'); 
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center center; 
            background-attachment: fixed;
        }
    </style>
</head>

<body class="fixed-sn mdb-skin div-body bg-skin-lp wow fadeInDown" style="display: none" >
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <ul id="slide-out" class="side-nav fixed sn-bg-1 custom-scrollbar ps-container ps-theme-default" data-ps-id="be7e7f93-91b6-1e55-2e19-82cfb32b7df3" style="transform: translateX(-100%);">
            <!-- Logo -->
            <li>
                <div class="logo-wrapper waves-light waves-effect waves-light">
                    <a href="#"><img src="https://gamaperu.files.wordpress.com/2015/10/logo-ranset.png?w=880" class="img-fluid flex-center"></a>
                </div>
            </li>
            <!--/. Logo -->
            <!--Social-->
            <li>
                <ul class="social">
                    <li><a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                    <li><a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                    <li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                    <li><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
                </ul>
            </li>
            <!--/Social-->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">

                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-file-o"></i>Pedidos<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="javascript:" onclick="fnOnPaginas(1);" class="waves-effect">Pedidos del Dia</a>
                                </li>
                                <li><a href="#" class="waves-effect">Historial Pedidos</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-dollar"></i>Ventas<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Ventas del Dia</a>
                                </li>
                                <li><a href="#" class="waves-effect">Historial de Ventas</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-product-hunt"></i>Productos<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Stock Minino</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-commenting-o"></i>Quejas<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">Clientes</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--<li><a href="javascript:" onclick="fnOnClose();" class="collapsible-header waves-effect arrow-r"><i class="fa fa-user"></i>Cerrar Sesion</a>-->
                    <li><a href="http://localhost/Ranset-WEB/core/bin/ajax/logout.php" class="collapsible-header waves-effect arrow-r"><i class="fa fa-user"></i>Cerrar Sesion</a>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
            <div class="sidenav-bg mask-strong"></div>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></ul>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav id="nav-ranset" class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-xs-left">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>Pedidos</p>
            </div>
            <ul class="nav navbar-nav ml-auto flex-row">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contacto</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Soporte</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:" onclick="fnOnClose();" class="nav-link waves-effect waves-light"><i class="fa fa-user"></i> <span class="hidden-sm-down">Cerrar sesion</span></a>
                </li>
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->
    
    <!--Main layout-->
    <main>

        <div class="contenedor-paginas">

        </div>

        <canvas id="lineChartEx2" height="465" width="931" style="width: 931px; height: 465px;"></canvas>

        <div id="ranset-load" class="modal" role="dialog" tabindex="-1" data-backdrop="static" data-keyboard="false" aria-hidden="false">
            <div class="text-center" style="color: #fff; width: 65px; height: 50px; position: absolute; top: 50%; left: 50%; margin-top: -32.5px; margin-left: -25px;">
                <!--Medium blue-->
                <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-blue-only">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div><div class="gap-patch">
                        <div class="circle"></div>
                      </div><div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>
                </div>
                <br />
                <small>Cargando</small>
            </div>
        </div>
        

    </main>
    <!--/Main layout-->

    <!--Footer-->
    
    <!--/.Footer-->

    
    
    <!-- SCRIPTS -->
    <script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/compiled.min.js"></script>

    <script>
        new WOW().init();
    </script>

    <script>
    $(".button-collapse").sideNav();
        
    var el = document.querySelector('.custom-scrollbar');
    Ps.initialize(el);
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(".div-body").css("display","block");
        });

        function fnOnClose(){
            window.location.replace('../index.html');
        }

        function fnOnBarra (valor) {
            // body...

            if(valor == 1){
                $('#barra-pedido').removeClass('danger-color'); //remove
                $('#barra-pedido').removeClass('primary-color'); //add
                $('#barra-pedido').addClass('warning-color'); //remove
            }else if(valor == 2){
                $('#barra-pedido').removeClass('warning-color'); //add
                $('#barra-pedido').removeClass('danger-color'); //add
                $('#barra-pedido').addClass('primary-color'); //add
            }else if(valor == 3){
                $('#barra-pedido').removeClass('warning-color'); //remove
                $('#barra-pedido').removeClass('primary-color'); //remove
                $('#barra-pedido').addClass('danger-color'); //remove
            }
        }


        function fnOnPaginas (valor) {
            // body...
            if(valor == 1){

                $.ajax({
                    async: true,
                    beforeSend: function (xhr) { $('#ranset-load').modal('show'); },
                    url: 'getPedidoDia.php', type: 'POST', dataType: 'html',
                    /*data: { __a: 0, __b: vperiodo },*/
                    success: function (response) {
                        $('#ranset-load').modal('hide');
                        /*$('.cls-tabla-canje-g1').replaceWith(response);*/
                        $(".contenedor-paginas").html(response);

                    },
                    complete: function () {
                        $('#ranset-load').modal('hide');
                    },
                    error: function (xhr) {
                        $('#ranset-load').modal('hide');
                        alert('Algo salió mal, por favor intente de nuevo. uno');
                    }
                });
            }
        }


    </script>

    <div class="drag-target" style="left: 0px; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>

<div class="hiddendiv common"></div>

</body>

</html>