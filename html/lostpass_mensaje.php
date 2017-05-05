<?php include(HTML_DIR. 'overall/header.php');?>

<body>
<header>
        <?php include(HTML_DIR. 'overall/topnav.php');?>

        <!--Mask-->
        <div class="view hm-black-strong">
            <div class="full-bg-img flex-center">
                <div class="container">
                    <div class="row" id="home">

                        <!--First column-->
                        <div class="col-lg-6">
                            <div class="description">
                                <h2 class="h2-responsive wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">Ranse't</h2>
                                <hr class="hr-dark wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
                                <p class="wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                    Los esposos Castañeda iniciaron confeccionado jeans y ahora venden diversas prendas de vestir en sus cinco locales de Gamarra.
                                </p>
                                <br>
                                <a class="btn btn-outline-white btn-lg wow fadeInLeft waves-effect waves-light" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInLeft;">Leer mas...</a>
                            </div>
                        </div>                        

                    
					
					<section class="mbr-section mbr-after-navbar">

						<div class="mbr-section__container container mbr-section__container--isolated">

  						<div class="alert alert-dismissible alert-success">
      						<strong>Contraseña cambiada!</strong> se ha generado una nueva contraseña <strong><?php echo $password ?></strong> ,<a href="http://localhost/Ranset-WEB/index.php"> prueba iniciar sesión</a> con ella y podrás cambiarla una vez estes dentro.
  						</div>

						</div>
					</section>




                    </div>
                </div>
            </div>
        </div>
        <!--/.Mask-->

    </header>
<!--/Navigation & Intro-->


    <!-- /Start your project here-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>
    <script type="text/javascript">
    
    $(document).ready(function(){
            fnOnPrueba();
    });

    

    function fnOnModal(valor){

        if(valor == 1 ){
            $(".div-registrate").fadeIn(800);
            $(".div-login").css("display","none");
            $(".div-registrate").css("display","block");
        }else if(valor == 2){
            $(".div-login").fadeIn(800);
            $(".div-registrate").css("display","none");
            $(".div-contrasena").css("display","none");
            $(".div-login").css("display","block");
        }else if(valor == 3){
            $(".div-contrasena").fadeIn(800);
            $(".div-login").css("display","none");
            $(".div-contrasena").css("display","block");
        }
        
    }


    function fnInicioSesion(){

       window.location.href = 'views/menu.php';

    }


    function fnOnPrueba () {
                // body...
            if(valor == 1){

                $.ajax({
                    async: true,
                    beforeSend: function (xhr) { /*$('#ranset-load').modal('show');*/ },
                    url: '/getPedidoDia.php', type: 'POST', dataType: 'json',
                    data: { __a: 0, __b: vperiodo },
                    success: function (response) {
                        //$('#ranset-load').modal('hide');
                        //$('.cls-tabla-canje-g1').replaceWith(response);
                        console.log(response);

                    },
                    complete: function () {
                        //$('#ranset-load').modal('hide');
                    },
                    error: function (xhr) {
                        //$('#ranset-load').modal('hide');
                        alert('Algo salió mal, por favor intente de nuevo. uno');
                    }
                });
            }
        }


    </script>
    <div class="hiddendiv common"></div>




<!--Jonathan-->     
<script type="text/javascript" src="views/app/js/login.js"></script>
<script type="text/javascript" src="views/app/js/reg.js"></script>
<script type="text/javascript" src="views/app/js/lostpass.js"></script>


</body>

</html>
