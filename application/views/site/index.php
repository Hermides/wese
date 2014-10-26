<?php
if (isset($_GET['erroreg'])) {
    echo "<p class='row alert alert-warning'><b>Disculpe pero no lleno todos los campos requeridos y el registro no fue aprovado.</b><button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button></p>";
} else if (isset($_GET['success'])) {
    echo "<p class='row alert alert-success'><b> En hora buena, el registro fue aprovado. por favor revise su email para que active su cuenta!</b><button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button></p>";
}
?>
<!DOCTYPE html>
<html lang="es">



    <head>

        <title>wesead</title>

        <!-- Meta Tags -->
        <meta charset="UTF-8" />
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="shortcut icon" href="http://snapsoft.com.do/repos_wese/assets/images/favicon.ico" />
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=Standards"><![endif]-->
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="keywords" content="wese advertising">
        <meta name="description" content="Advertising mobile app">
        <meta name="author" content="Unknown" >

        <!-- Bootstrap Version 3.0-->
        <link rel="stylesheet" href="http://snapsoft.com.do/repos_wese/assets/css/bootstrap/bootstrap.css" />

        <!--Base style sheet-->
        <link href="http://snapsoft.com.do/repos_wese/assets/css/base.css" type="text/css" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv/html5shiv.js" type="text/javascript"></script>
    <script src="js/respond/respond.min.js" type="text/javascript"></script>
        <![endif]-->


    </head>
    <style>
        #IrArriba {
            position: fixed;
            bottom: 30px; /* Distancia desde abajo */
            right: 30px; /* Distancia desde la derecha */
        }

        #IrArriba span {
            width: 60px; /* Ancho del botón */
            height: 60px; /* Alto del botón */
            display: block;
            background: url(http://lh5.googleusercontent.com/-luDGEoQ_WZE/T1Ak-gta5MI/AAAAAAAACPI/ojfEGiaNmGw/s60/flecha-arriba.png) no-repeat center center;
        }

        #simplemodal-container a.modalCloseImg {
            background:url(/img/x.png) no-repeat; /* adjust url as required */
            width:25px;
            height:29px;
            display:inline;
            z-index:3200;
            position:absolute;
            top:-15px;
            right:-18px;
            cursor:pointer;
        }
    </style>
    <body>


        <header>

            <div class="container">
                <div class="navbar-header navbar-default">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="#"><img src="http://snapsoft.com.do/repos_wese/assets/images/logo.png" width="80"></a>
                </div>

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right main-nav">
                        <li><a href="#home" title="Home">Home</a></li>
                        <li><a href="http://snapsoft.com.do/" title="Features">Nosotros</a></li>
                        <li><a href="#features" title="Features">Wese ad</a></li>
                        <li><a href="#about" title="About">Wese Business</a></li>                
                        <li><a href="#contact" title="Contact Us">Contacto</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>

        </header>



        <div id="carousel-example-generic" class="carousel slide">
            <!-- Indicators -->


            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active yellow-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6"><img src="http://snapsoft.com.do/repos_wese/assets/images/slide.png" alt="Flatron Mobile Apps" class="img-responsive"></div>
                            <div class="col-xs-6">
                                <h2>Advertising mobile app<br>Android + Apple</h2>
                                <p class="hidden-xs"> Un nuevo servicio de paquete pulicitario que envia tus ofertas de temporada de distintos establecimientos comerciales.<br><br></p>
                                <p class="hidden-xs"><a href="#" class="btn btn-danger btn-lg" title="Download Apple App"><i class="glyphicon glyphicon-cloud-download"></i> Apple App</a> &nbsp; 
                                    <a href="#" class="btn btn-primary btn-lg" title="Download Android App"><i class="glyphicon glyphicon-cloud-download"></i> Android App</a></p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- start work it -->
        <div class="container">

            <h1 class="text-center main-heading" id="features">Como funciona?</h1>
            <p class="text-center">En Wese ad veras ofertas diariamente para comer y comprar en tu ciudad.</p>    


            <div class="row features">
                <div class="col-sm-4 text-center">
                    <i class="glyphicon glyphicon-cloud-download blue-bg"></i>
                    <h3>Descargala</h3>
                    <p>Instala wese en tu movil.</p>
                </div>
                <div class="col-sm-4 text-center">
                    <i class="glyphicon glyphicon-plus red-bg"></i>
                    <h3>Registrate</h3>
                    <p>Completa tu registro y elige tus preferencias</p>
                </div>
                <div class="col-sm-4 text-center">
                    <i class="glyphicon glyphicon-fire yellow-bg"></i>
                    <h3>Disfruta</h3>
                    <p>Aprovecha las ofertas que te ofrecemos</p>
                </div>
            </div>

            <hr>

            <div class="row" id="about">
                <div class="col-sm-6">
                    <img src="http://snapsoft.com.do/repos_wese/assets/images/pad.png" class="img-responsive">
                </div>
                <div class="col-sm-6">
                    <h2 class="features-heading"><span class="text-muted">Wese ad Business</span><br><span class="text-primary">Promociona tus ofertas</span></h2>
                    <p class="text-muted">Wese ad trae tu empresa a la mano del consumidor en el momento en que se genere su necesidad.</p>
                    <ul class="text-muted">				
                        <li>Crear tus campañas publicitarias.</li> 
                        <li>Selecciona tu publico</li>
                        <li>Establece el presupuesto de tu campaña</li>
                        <li>Envia tus ofertas al público</li><br/>					
                        <a>
                            <button type="button"  data-toggle="modal" data-target="#myModal" title="register" class="btn btn-success btn-lg"> Registrate</button> &nbsp; 
                            <a href="clientes/login" target="_blank" title="login" class="btn btn-info btn-lg">Login</a>
                        </a>

                    </ul>



                </div>
            </div>
            <!-- modal wese register and login -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div  class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <!--h1 class="modal-title" id="myModalLabel">Registro</h1-->
                        </div>
                        <div class="modal-body">
                            <div class="col-md-7">
                                <?php
                                $this->load->view('view_function/registro_clientes');
                                ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <hr>
                            <img width="150" src="http://i1058.photobucket.com/albums/t412/collegebaseballrecruitingleague/registrate.png"/>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-sm-6">
                    <h2 class="features-heading"><span class="text-muted">¡Es así de simple! </span><br><span class="text-primary">Recibe Wese todos los días</span></h2>
                    <p class="text-muted">Prueba las muchas caracteristicas que te trae wese ad. Además proporciona <br>promociones en locaciones  geográficas dependiendo dónde se encontré el Cliente. </p>

                </div>
                <div class="col-sm-6">
                    <img src="http://snapsoft.com.do/repos_wese/assets/images/two-mob.png" class="img-responsive">
                </div>
            </div>

            <br>


        </div>


        <!-- end work it -->



        <!-- download bar start-->
        <div class="download-bar">
            <div class="container text-center">		 	
                <a href="#" class="btn btn-danger btn-lg" title="Download Apple App"><i class="glyphicon glyphicon-cloud-download"></i> Apple App</a> &nbsp; 
                <a href="#" class="btn btn-primary btn-lg" title="Download Android App"><i class="glyphicon glyphicon-cloud-download"></i> Android App</a>      
            </div>
        </div>
        <!-- download bar end-->  

        <footer id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h5>Wese advertising</h5>
                        <nav class="footer-nav">
                            <ul class="list-unstyled">
                                <li><a href="#">Home</a></li>
                                <li><a href="http://snapsoft.com.do/" title="Features">Nosotros</a></li>
                                <li><a href="#features">Wese ad</a></li>
                                <li><a href="#about">Wese Business</a></li>
                                <li><a href="#contact">Contacto</a></li>

                            </ul>
                        </nav>
                    </div>

                    <div class="col-sm-3">
                        <h5>Contacto</h5>
                        <address>
                            <strong>Devel team</strong><br>
                            <a href="www.snapsoft.com.do">Snapsoft</a><br>
                            Dominican Republic<br>

                            </div>
                            <div class="col-sm-3">
                                <ul class="list-inline list-unstyled social">
                                    <li><a href="#" target="_blank" class="blue-bg"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="blue-bg"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="red-bg"><i class="fa fa-github"></i></a></li>
                                </ul>

                            </div>
                    </div>
                </div>
                <div id='IrArriba'>
                    <a href='#Arriba'><span/></a>
                </div>
        </footer>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://snapsoft.com.do/repos_wese/assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="http://snapsoft.com.do/repos_wese/assets/js/respond/respond.min.js"></script>
        <script type='text/javascript'>
            //<![CDATA[
            // Botón para Ir Arriba
            jQuery.noConflict();
            jQuery(document).ready(function () {
                jQuery("#IrArriba").hide();
                jQuery(function () {
                    jQuery(window).scroll(function () {
                        if (jQuery(this).scrollTop() > 200) {
                            jQuery('#IrArriba').fadeIn();
                        } else {
                            jQuery('#IrArriba').fadeOut();
                        }
                    });
                    jQuery('#IrArriba a').click(function () {
                        jQuery('body,html').animate({
                            scrollTop: 0
                        }, 800);
                        return false;
                    });
                });

            });

            $('#myModal').modal(options)
            //]]>
        </script>
        <script>
            $('#clave').keyup(function (e) {
                var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
                var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
                var enoughRegex = new RegExp("(?=.{6,}).*", "g");
                if (false == enoughRegex.test($(this).val())) {
                    $('#passstrength').html('<p class="text-danger">Muy debil!</p>');
                } else if (strongRegex.test($(this).val())) {
                    $('#passstrength').className = 'ok';
                    $('#passstrength').html('<p class="text-success">Fuerte!</p>');
                } else if (mediumRegex.test($(this).val())) {
                    $('#passstrength').className = 'alert';
                    $('#passstrength').html('<p class="text-warning">Media!</p>');
                } else {
                    $('#passstrength').className = 'error';
                    $('#passstrength').html('<p class="text-danger">Débil!</p>');
                }
                return true;
            });

        </script>
        <script>
            $(function () {
                var target, scroll;

                $("a[href*=#]:not([href=#])").on("click", function (e) {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        target = $(this.hash);
                        target = target.length ? target : $("[id=" + this.hash.slice(1) + "]");

                        if (target.length) {
                            if (typeof document.body.style.transitionProperty === 'string') {
                                e.preventDefault();

                                var avail = $(document).height() - $(window).height();

                                scroll = target.offset().top;

                                if (scroll > avail) {
                                    scroll = avail;
                                }

                                $("html").css({
                                    "margin-top": ($(window).scrollTop() - scroll) + "px",
                                    "transition": "1s ease-in-out"
                                }).data("transitioning", true);
                            } else {
                                $("html, body").animate({
                                    scrollTop: scroll
                                }, 8000);
                                return;
                            }
                        }
                    }
                });

                $("html").on("transitionend webkitTransitionEnd msTransitionEnd oTransitionEnd", function (e) {
                    if (e.target == e.currentTarget && $(this).data("transitioning") === true) {
                        $(this).removeAttr("style").data("transitioning", false);
                        $("html, body").scrollTop(scroll);
                        return;
                    }
                });
            }
            );
        </script>
    </body>


</html>