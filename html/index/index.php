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
                     


                        <!--Second column-->
                        <div class="col-lg-6 div-login" style="display: block" onkeypress="runScriptLogin(event)">

                            <div id="_AJAX_LOGIN_">                                
                                
                            </div>

                            <!--Form-->
                            <div class="card wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="card-block">
                                    
                                    <!--Form without header-->
                                    <div class="card">
                                        <div class="card-block">

                                            <!--Header-->
                                            <div class="form-header   darken-4" style="background-color: #3F729B">
                                                <h3><i class="fa fa-lock"></i> Login:</h3>
                                            </div>

                                            <!--Body-->
                                            <div class="md-form">
                                                <i class="fa fa-envelope prefix"></i>
                                                <input type="text" id="user_login" class="form-control validate">
                                                <label for="form2" data-error="error" data-success="correcto">Usuario / Email</label>
                                            </div>

                                            <div class="md-form">
                                                <i class="fa fa-lock prefix"></i>
                                                <input type="password" id="pass_login" class="form-control validate">
                                                <label for="form4" data-error="error" data-success="correcto">Contraseña</label>
                                            </div>                                           

                                            <div class="text-center"> 
                                                <button class="btn btn-ins" onclick="goLogin()">Ingresar</button>
                                            </div>

                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer">
                                            <div class="options">
                                                <p>No eres un miembro? <a href="javascript:" onclick="fnOnModal(1);">Registrate</a></p>
                                                <p>Haz olvidado <a href="javascript:" onclick="fnOnModal(3);">Contraseña?</a></p>
                                            </div>
                                        </div>

                                    </div>
                                    <!--/Form without header-->


                                </div>
                            </div>
                            <!--/.Form-->
                        </div>
                        <!--/Second column-->





                        <!--Second column-->
                        <div class="col-lg-6  div-registrate" style="display: none" onkeypress="runScriptReg(event)">


                        <div id="_AJAX_REG_"></div>
                            <!--Form-->
                            <div class="card wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="card-block">
                                    
                                    <!--Form without header-->
                                    <div class="card">
                                        <div class="card-block">

                                            <!--Header-->
                                            <div class="form-header   darken-4" style="background-color: #3F729B">
                                                <h3><i class="fa fa-lock"></i> Registrate:</h3>
                                            </div>

                                            
                                            <!--Body-->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="md-form">
                                                        <i class="fa fa-user prefix"></i>
                                                        <input type="text" id="nom_reg" class="form-control validate">
                                                        <label for="form2"  data-error="error" data-success="correcto">Nombres</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="md-form">
                                                        <i class="fa fa-user prefix"></i>
                                                        <input type="text" id="ape_reg" class="form-control validate">
                                                        <label for="form4"  data-error="error" data-success="correcto">Apellidos</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="md-form  form-group">
                                                        <i class="fa fa-user prefix"></i>
                                                        <input type="number" id="dni_reg" class="form-control validate">
                                                        <label for="form8"  data-error="error" data-success="correcto">DNI</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="md-form  form-group">
                                                        <i class="fa fa-user prefix"></i>
                                                        <input type="text" id="dir_reg" class="form-control validate">
                                                        <label for="form6"  data-error="error" data-success="correcto">Direccion</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="md-form  form-group">
                                                        <i class="fa fa-user prefix"></i>
                                                        <input type="number" id="tel_reg" class="form-control validate">
                                                        <label for="form10"  data-error="error" data-success="correcto">Telefono</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                     <div class="md-form">
                                                        <i class="fa fa-envelope prefix"></i>
                                                        <input type="email" id="email_reg" class="form-control">
                                                        <label for="form12" data-error="error" data-success="correcto">Email</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--<div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="form-inline">-->
                                                            <!--<div class="md-form  form-group">
                                                                <i class="fa fa-user prefix"></i>
                                                            </div>-->
                                                            <!--<div class="form-inline">-->
                                                                <!--<fieldset class="form-group">-->
                                                                    <!--<input name="sexo" type="radio" id="radioM" value="M">
                                                                    <label for="radio11">Masculino</label>-->
                                                               <!--</fieldset>-->

                                                                <!--<fieldset class="form-group">-->
                                                                    <!--<input name="sexo" type="radio" id="radioF" value="F">
                                                                    <label for="radio21">Femenino</label>-->

                                                                    <div class="btn-group row" data-toggle="buttons">
        <label>
          <input type="radio"  name="options1" value="option1" />
          <span>Option 1</span>
        </label>
        <label >
          <input type="radio"  name="options2" value="option2" />
          <span>Option 2</span>
        </label>
        <label >
          <input type="radio" name="options3" value="option3" />
          <span>Option 3</span>
        </label>
      </div>
                                                                <!--</fieldset>-->
                                                            <!--</div>-->
                                                        <!--</div>
                                                    </div>
                                                </div>
                                            </div>-->

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="md-form  form-group">
                                                        <i class="fa fa-user prefix"></i>
                                                        <input type="text" id="user_reg" class="form-control validate">
                                                        <label for="form14"  data-error="error" data-success="correcto">Usuario</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="md-form  form-group">
                                                        <i class="fa fa-lock prefix"></i>
                                                        <input type="password" id="pass_reg" class="form-control validate">
                                                        <label for="form16" data-error="error" data-success="correcto">Contraseña</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <button class="btn btn-ins" onclick="goReg()">Registrar</button>
                                            </div>

                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer">
                                            <div class="options">
                                                <p>Ya tienes una cuenta? <a href="javascript:" onclick="fnOnModal(2);">Inicia Sesion</a></p>
                                            </div>
                                        </div>

                                    </div>
                                    <!--/Form without header-->


                                </div>
                            </div>
                            <!--/.Form-->
                        </div>
                        <!--/Second column-->

                        <!--Second column-->
                        <div class="col-lg-6 div-contrasena" style="display: none" onkeypress="runScriptLostpass(event)">
                        <div id="_AJAX_LOSTPASS_">                                
                                
                            </div>
                            <!--Form-->
                            <div class="card wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div class="card-block">
                                    
                                    <!--Form without header-->
                                    <div class="card">
                                        <div class="card-block">

                                            <!--Header-->
                                            <div class="form-header   darken-4" style="background-color: #3F729B">
                                                <h3><i class="fa fa-lock"></i> Recuperar Contraseña:</h3>
                                            </div>

                                            <!--Body-->
                                            <div class="md-form">
                                                <i class="fa fa-envelope prefix"></i>
                                                <input type="email" id="email_lostpass" class="form-control">
                                                <label for="form2" data-error="error" data-success="correcto">Email</label>
                                            </div>

                                            <div class="text-center">
                                                <button class="btn btn-ins" onclick="goLostpass()">Enviar</button>
                                            </div>

                                        </div>

                                        <!--Footer-->
                                        <div class="modal-footer">
                                            <div class="options">
                                                <p>Te acordates de tu contraseña? <a href="javascript:" onclick="fnOnModal(2);">Inicia Sesion</a></p>
                                            </div>
                                        </div>

                                    </div>
                                    <!--/Form without header-->


                                </div>
                            </div>
                            <!--/.Form-->
                        </div>
                        <!--/Second column-->

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
