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

        <title>Form Component</title>

        <!-- Bootstrap core CSS -->
        <?php $this->load->view('view_function/css'); ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->


    </head>

    <body>
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
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
                                        <h3>Your file was successfully uploaded!</h3>
                                        <img width="400" class="img-thumbnail" src="<?php echo base_url() . $img; ?>"/>
                                    </div>
                                </section>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
            <!-- Right Slidebar end -->
            <!--footer start-->
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url(); ?>/repos/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>/repos/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/repos/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>/repos/js/jquery.nicescroll.js" type="text/javascript"></script>

        <script src="<?php echo base_url(); ?>/repos/js/jquery-ui-1.9.2.custom.min.js"></script>
        <script class="include" type="text/javascript" src="<?php echo base_url(); ?>/repos/js/jquery.dcjqaccordion.2.7.js"></script>

        <!--custom switch-->
        <script src="<?php echo base_url(); ?>/repos/js/bootstrap-switch.js"></script>
        <!--custom tagsinput-->
        <script src="<?php echo base_url(); ?>/repos/js/jquery.tagsinput.js"></script>
        <!--custom checkbox & radio-->
        <script type="text/javascript" src="<?php echo base_url(); ?>/repos/js/ga.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>/repos/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/repos/assets/bootstrap-daterangepicker/date.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/repos/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/repos/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/repos/assets/ckeditor/ckeditor.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>/repos/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
        <script src="<?php echo base_url(); ?>/repos/js/respond.min.js" ></script>

        <!--right slidebar-->
        <script src="js/slidebars.min.js"></script>


        <!--common script for all pages-->
        <script src="<?php echo base_url(); ?>/repos/js/common-scripts.js"></script>

        <!--script for this page-->
        <script src="<?php echo base_url(); ?>/repos/js/form-component.js"></script>

    </body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script src="http://localhost/datepicker/js/bootstrap-datepicker.js"></script>
    <script>
        $('.datepicker').datepicker()
        $(document).ready(function() {

            var consulta;

            //hacemos focus
            $("#camp").focus();

            //comprobamos si se pulsa una tecla
            $("#camp").keyup(function(e) {
                //obtenemos el texto introducido en el campo
                consulta = $("#camp").val();

                //hace la búsqueda
                $("#resultado").delay(5000).queue(function(n) {

                    $("#resultado").html('<img src="ajax-loader.gif" />');

                    $.ajax({
                        type: "POST",
                        url: "http://localhost/ejemp/campverify.php",
                        data: "b=" + consulta,
                        dataType: "html",
                        error: function() {
                            alert("error petición ajax");
                        },
                        success: function(data) {
                            $("#resultado").html(data);
                            n();
                        }
                    });

                });

            });

        });
    </script>
    <script>
        $(function() {
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

