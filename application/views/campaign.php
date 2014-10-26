<?php
if (!isset($this->user->correo)) {
    redirect('in/login');
}

/* if (empty($planta)) {/* si es primera vez activamos el plan free *
  $usert = $this->user->id;
  $plan = array(
  'id_plan' => '',
  'plan' => 'Free',
  'token' => 'version de prueba',
  'fecha' => '4',
  'user_id' => "$usert"
  );
  $this->db->insert('plan', $plan);
  } */
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from thevectorlab.net/flatlab/form_component.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2014 01:41:15 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="http://snapsoft.com.do/repos_wese/assets/images/favicon.ico" />

        <title>Form Camp</title>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
        <!-- Bootstrap core CSS -->
        <?php $this->load->view('view_function/css'); ?>
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
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <!-- page start-->
                    <div class="row">
                        <div class="col-lg-8">
                            <section class="panel">
                                <header class="panel-heading">
                                    <h2>Informaci&oacute;n para crear, <b>Campa&ntilde;a</b></h2>
                                    <p class="text-danger">Todos los campos son necesarios, por favor llenelos.</p>
                                </header>
                                <div class="panel-body">
                                    <div style="padding: 10px 10px;"><?php $this->load->view('view_function/form_camp'); ?></div>

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
                <script src="http://localhost/datepicker/js/bootstrap-datepicker.js"></script>
                <script src="//code.jquery.com/jquery-1.10.2.js"></script>
                <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
                <script>

                            $('.datepicker').datepicker();
                            var consulta;
                            //comprobamos si se pulsa una tecla
                            $("#camp").keyup(function(e) {
                    //obtenemos el texto introducido en el campo
                    consulta = $("#camp").val();
                            //hace la búsqueda
                            $("#resultado").delay(2000).queue(function(n) {


                    $.ajax({
                    type: "POST",
                            url: "http://wese.snapsoft.com.do/index.php/in/verifycamp",
                            data: "b=" + consulta,
                            dataType: "html",
                            error: function() {
                            $("#resultado").html("<p class='alert alert-danger'>error petición ajax</p>");
                            },
                            success: function(data) {
                            $("#resultado").html(data);
                                    n();
                            }
                    });
                    });
                    });</script>
                <script>

<?php
echo "$(function() {
                        var availableTags = [";
foreach ($ciudad as $ciurow) {
    echo "'$ciurow->nombre',";
}
echo " 'Todas las zonas permitidas'
                        ];
                        $('#tags').autocomplete({
                            source: availableTags
                        });";
?>

                    });
                </script>

                </html>

