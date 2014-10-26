<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from thevectorlab.net/flatlab/form_component.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2014 01:41:15 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="img/favicon.html">

        <title>Camp</title>

        <!-- Bootstrap core CSS -->
        <?php $this->load->view('view_function/css'); ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('repos/style2.css'); ?>" />
        <link rel="stylesheet" type="text/css" href="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/css/prettify.css"/>
        <link rel="stylesheet" type="text/css" href="http://jhollingworth.github.io/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"/>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->


    </head>
    <style>
        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
        }
        .custom-file-input::before {
            content: 'Select some files';
            display: inline-block;
            background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 700;
            font-size: 10pt;
        }
        .custom-file-input:hover::before {
            border-color: black;
        }
        .custom-file-input:active::before {
            background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
        }
    </style>

    <body>
        <!--section class="wrapper">
        <!-- page start--
        <div class="container">
            <div class="col-lg-6">
                <section class="panel">
                    <header class="panel-heading">
                        Sube una imagen para la campa&ntilde;a
                    </header>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Editor
                                </header>
                                <div class="panel-body">
                                    <div class="form"-->
        <?php
        if (isset($_GET['add_plus'])) {
            echo "<p class='alert alert-success'>Imagen subida y agregada exitosamente. Desea continuar, de los contrario click en listo.</p>";
        }
        /* echo $fileuser = @$_GET['camp'] . @$_GET['nom'];
          if (file_exists($fileuser)) {
          mkdir("./campId$fileuser/", 777, TRUE);
          echo $msj_error = "Todo marcha bien.";
          } */
        ?>
        <!--form id="upload" method="post" action="upload/do_upload" enctype="multipart/form-data"> 
            <div id="drop">
                Drop Here

                <a>Browse</a>
                <input   type="file" name="userfile" size="20" multiple/>
                <input type="hidden" name="camp" value="<?php echo @$_GET['nom']; ?>"/>
                <input type="hidden" name="fileuser" value="<?php echo @$_GET['camp']; ?>"/>
            </div>

            <ul>
        <!-- The file uploads will be shown here --
        </ul>
        <hr/>
    </form-->
        <form id="upload" method="post" action="<?php echo base_url('upload/do_upload'); ?>" enctype="multipart/form-data">
            <label>Imagen</label>
            <hr/>
            <input required="required" type="file" name="userfile" size="20" />
            <input type="hidden" name="nomcamp" value="<?php echo @$_GET['nom']; ?>"/>
            <input type="hidden" name="campuser" value="<?php echo @$_GET['camp']; ?>"/>
            <hr/>
            <h2 style="color:white;">Descripcion</h2>
            <div class="hero-unit" style="margin-top:40px">
                <textarea class="textarea" name="descp" placeholder="Enter text ..." style="width: 100%; height: 200px"></textarea>
            </div>
            <!--textarea class="form-control descrip" name="descp"></textarea-->
            <input class="btn btn-info" type="submit" value="Subir imagen" />
        </form>
        <a class="btn btn-danger" href="<?php echo base_url(); ?>">Ahora no</a>
        <!--/div>
    </div>
</section>
</div>

</div>
</section>
</div>
</div>
        <!-- Right Slidebar end -->
        <!--footer start-->
        <!--footer end--
        </section-->
    </body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script  type="text/javascript" src="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script  type="text/javascript" src="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://jhollingworth.github.io/bootstrap-wysihtml5/lib/js/prettify.js"></script>
    <script type="text/javascript" src="http://jhollingworth.github.io/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
    <script>
        $('.descrip').wysihtml5();
	$(prettyPrint);
        
        $('.datepicker').datepicker()
        $(document).ready(function () {

            var consulta;

            //hacemos focus
            $("#camp").focus();

            //comprobamos si se pulsa una tecla
            $("#camp").keyup(function (e) {
                //obtenemos el texto introducido en el campo
                consulta = $("#camp").val();

                //hace la búsqueda
                $("#resultado").delay(5000).queue(function (n) {

                    $("#resultado").html('<img src="ajax-loader.gif" />');

                    $.ajax({
                        type: "POST",
                        url: "http://localhost/ejemp/campverify.php",
                        data: "b=" + consulta,
                        dataType: "html",
                        error: function () {
                            alert("error petición ajax");
                        },
                        success: function (data) {
                            $("#resultado").html(data);
                            n();
                        }
                    });

                });

            });

        });
    </script>
    <script>
        $(function () {
            var availableTags = [
                "Santiago de los caballeros",
                "La romana",
                "Santo Domindo",
                "Mao"
            ];
            $("#tags").autocomplete({
                source: availableTags
            });
        });
    </script>
</html>

