<?php
if (!isset($this->user->correo)) {
    redirect('in/login');
}
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from thevectorlab.net/flatlab/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2014 01:43:26 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="http://snapsoft.com.do/repos_wese/assets/images/favicon.ico" />

        <title>Profile</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url(); ?>/repos/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo base_url(); ?>/repos/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!--right slidebar-->
        <link href="<?php echo base_url(); ?>/repos/css/slidebars.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url(); ?>/repos/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/repos/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <section id="container" class="">
            <!--header start-->
            <?php $this->load->view('nav-lista'); ?>
            <!--header end-->
            <!--sidebar start-->
            <?php $this->load->view('nav-lista-block'); ?>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <!-- page start-->
                    <div class="row">
                        <aside class="profile-nav col-lg-3">
                            <section class="panel">
                                <div class="user-heading round">
                                    <a href="#">
                                        <img src="<?php echo base_url() . $this->user->img; ?>" alt="">
                                    </a>
                                    <h1><?php echo $this->user->nick; ?></h1>
                                    <p><?php echo $this->user->correo; ?></p>
                                </div>

                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active"><i class="fa fa-user"></i> Profile</a></li>
                                    <li><?php
                                    if(isset($_GET['errorupload'])){
                                        echo "<p class='alert alert-warning'>Erro ocacionado por que solo aceptamos imagenes de 100x100px y menores a los 100 kb.</p>";
                                    }
                                    ?></li>
                                    <li>
                                        <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo">
                                            Cambiar Foto
                                        </button>

                                        <div id="demo" class="collapse">
                                            <?php echo @$error; ?>

                                            <?php echo form_open_multipart('upload/user'); ?>
                                            <input name="user" type="hidden" value="<?php echo $this->user->id; ?>"/>
                                            <input required="required" type="file" name="userfile" size="20" />
                                            <input class="btn btn-info" type="submit" value="Subir imagen" />

                                            </form>
                                        </div>

                                    </li>
                                    <!--li><a href="profile-edit.html"> <i class="fa fa-edit"></i> Edit profile</a></li-->
                                </ul>

                            </section>
                        </aside>
                        <aside class="profile-info col-lg-9">
                            <section class="panel">
                                <div class="panel-body bio-graph-info">
                                    <h1>Bio Graph</h1>
                                    <div class="row">
                                        <div class="bio-row">
                                            <p><span>Primer Nombre </span>: <?php echo $this->user->nombre; ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Primer apellido </span>: <?php echo $this->user->apellido; ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Fecha de cumplea&ntilde;os </span>: <?php echo $this->user->fecha_nac; ?></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Email </span>: <?php echo $this->user->correo; ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="bio-row" style="width: 400px; text-align: justify; ">
                                            <h2>Yo!</h2>
                                            <p>Hola soy <?php echo $this->user->nombre . " ";
                                            echo $this->user->apellido; ?> vivo feliz por que puedo usar esta plataforma para mis asuntos publicitarios, si mi nacimiento fue el <?php echo $this->user->fecha_nac; ?>.</p>
                                            <h3>La publicidad en internet</h3>
                                            <p> La publicidad en Internet tiene como principal herramienta la página web y su contenido, para desarrollar este tipo de publicidad, que incluye los elementos de: texto, enlace, banner, web, weblog, blog, logo, anuncio, audio, vídeo y animación; teniendo como finalidad dar a conocer el producto al usuario que está en línea, por medio de estos formatos. Aunque estos son los formatos tradicionales y principales, se encuentran otros derivados de la web que surgen a medida que avanza la tecnología, como: videojuego, mensajería instantánea, descarga (download), interacción con SMS para celulares desde internet, etc.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </aside>
                    </div>

                    <!-- page end-->
                </section>
            </section>
            <!--main content end-->

            <!-- Right Slidebar end -->

            <!--footer start-->
           <?php $this->load->view('view_function/footer'); ?>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url(); ?>/repos/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>/repos/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="<?php echo base_url(); ?>/repos/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="<?php echo base_url(); ?>/repos/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>/repos/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/repos/assets/jquery-knob/js/jquery.knob.js"></script>
        <script src="<?php echo base_url(); ?>/repos/js/respond.min.js" ></script>

        <!--right slidebar-->
        <script src="<?php echo base_url(); ?>/repos/js/slidebars.min.js"></script>

        <!--common script for all pages-->
        <script src="<?php echo base_url(); ?>/repos/js/common-scripts.js"></script>

        <script>

            //knob
            $(".knob").knob();

        </script>


    </body>

    <!-- Mirrored from thevectorlab.net/flatlab/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2014 01:43:28 GMT -->
</html>