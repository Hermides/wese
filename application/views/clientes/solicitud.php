<?php
/* validador de acceso */
$this->valid->auth();
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2014 01:39:25 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="img/favicon.html">

        <title>WESE AD</title>

        <!-- Bootstrap core CSS -->
        <?php $this->load->view('view_function/css'); ?>


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <style>
        .categ select{
            padding:3px;
            margin: 0;
            -webkit-border-radius:4px;
            -moz-border-radius:4px;
            border-radius:4px;
            -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
            -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
            box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
            background: #f8f8f8;
            color:#888;
            border:none;
            outline:none;
            display: inline-block;
            -webkit-appearance:none;
            -moz-appearance:none;
            appearance:none;
            cursor:pointer;
            max-width: 400px;
        }

        input[type=number]{
            font-size:1em;
            border:1px solid #ddd;
            border-radius:5px;
            text-align:center;
            appearance: textfield;
        }

        input[type=number]:focus{
            outline:none;
        }

    </style>
    <body>

        <section id="container" >
            <!--header start-->
            <?php $this->load->view('clientes/assets/nav-lista2'); ?>
            <!--header end-->
            <!--sidebar start-->
            <?php $this->load->view('clientes/assets/nav-lista-block2'); ?>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="col-md-10">
                                <header class="panel-heading">
                                    <h2>Nueva solicitud de <b>Campa&ntilde;a</b></h2>
                                    <p class="text-danger">Todos los campos son necesarios, por favor llenelos.</p>
                                    <?php echo @$auth_solicitud; ?>
                                    <div id="resultado"></div>
                                </header>
                                <div class="panel-body">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <?php
                                        if (!isset($auth_solicitud)) {
                                            $this->load->view('clientes/assets/solicitud');
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    </div>
                    <!--weather statement end-->
                    </div>
                    </div>

                </section>
            </section>

            <!--footer start-->
<?php $this->load->view('view_function/footer'); ?>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url('/repos/js/jquery.js'); ?>"/></script>
    <script src="<?php echo base_url('/repos/js/bootstrap.min.js'); ?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url('/repos/js/jquery.dcjqaccordion.2.7.js'); ?>"></script>
    <script src="<?php echo base_url('/repos/js/jquery.scrollTo.min.js'); ?>"></script>
    <script src="<?php echo base_url('/repos/js/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('/repos/js/jquery.sparkline.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('/repos/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js'); ?>"></script>
    <script src="<?php echo base_url('/repos/js/owl.carousel.js'); ?>" ></script>
    <script src="<?php echo base_url('/repos/js/jquery.customSelect.min.js'); ?>" ></script>
    <script src="<?php echo base_url('/repos/js/respond.min.js'); ?>" ></script>

    <!--right slidebar-->
    <script src="<?php echo base_url('/repos/js/slidebars.min.js'); ?>"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url('/repos/js/common-scripts.js'); ?>"></script>

    <!--script for this page-->
    <script src="<?php echo base_url('/repos/js/sparkline-chart.js'); ?>"></script>
    <script src="<?php echo base_url('/repos/js/easy-pie-chart.js'); ?>"></script>
    <script src="<?php echo base_url('/repos/js/count.js'); ?>"></script>

    <script>
        var consulta;
        //comprobamos si se pulsa una tecla
        $("#camp").keyup(function (e) {
            //obtenemos el texto introducido en el campo
            consulta = $("#camp").val();
            //hace la búsqueda
            $("#resultado").delay(2000).queue(function (n) {


                $.ajax({
                    type: "POST",
                    url: "http://wese.snapsoft.com.do/index.php/in/verifycamp",
                    data: "b=" + consulta,
                    dataType: "html",
                    error: function () {
                        $("#resultado").html("<p class='alert alert-danger'>error petición ajax</p>");
                    },
                    success: function (data) {
                        $("#resultado").html(data);
                        n();
                    }
                });
            });
        });
        //owl carousel

        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true,
                autoPlay: true

            });
        });

        //custom select box

        $(function () {
            $('select.styled').customSelect();
        });

        $('#siguiente').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })

    </script>

</body>

<!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2014 01:40:00 GMT -->
</html>