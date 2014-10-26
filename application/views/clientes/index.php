<?php
/*validador de acceso*/
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
                    <!--state overview start--
                    <div class="row state-overview">
                        <div class="col-lg-3 col-sm-6">
                            <section class="panel">
                                <div class="symbol terques">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="value">
                                    <h1 class="count">
                                        0
                                    </h1>
                                    <p>New Users</p>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <section class="panel">
                                <div class="symbol red">
                                    <i class="fa fa-tags"></i>
                                </div>
                                <div class="value">
                                    <h1 class=" count2">
                                        0
                                    </h1>
                                    <p>Sales</p>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <section class="panel">
                                <div class="symbol yellow">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="value">
                                    <h1 class=" count3">
                                        0
                                    </h1>
                                    <p>New Order</p>
                                </div>
                            </section>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <section class="panel">
                                <div class="symbol blue">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="value">
                                    <h1 class=" count4">
                                        0
                                    </h1>
                                    <p>Total Profit</p>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!--state overview end--

                  <div class="col-lg-4">
                      <div class="row">
                          <div class="col-xs-6">
                    <!--pie chart start--
                    <section class="panel">
                        <div class="panel-body">
                            <div class="chart">
                                <div id="pie-chart" ></div>
                            </div>
                        </div>
                        <footer class="pie-foot">
                            Free: 260GB
                        </footer>
                    </section>
                    <!--pie chart start--
                    </div>
                    
                
                    <!--weather statement start-->
                    <section class="panel">
                        <div class="weather-bg">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <i class="fa fa-cloud"></i>
                                        <h3>Campa&ntilde;as online</h3>
                                        <p style="text-align: justify;">Una campaña publicitaria es una serie de mensajes publicitarios que comparten una misma idea y tema. Las campañas de publicidad aparecen en diferentes medios a través de un marco de tiempo específico.</p>
                                    </div>
                                    <div class="col-xs-6">
                                        <iframe class="img-thumbnail" style="width: 800px; height: 400px;"  src="//www.youtube-nocookie.com/embed/gtYoUmnoLC0" frameborder="0" allowfullscreen></iframe></div>
                                </div>
                            </div>
                        </div>

                        <footer class="weather-category">
                            <ul>
                                <li class="active">
                                    <h5>Facil</h5>
                                </li>
                                <li>
                                    <h5>Simple</h5>
                                </li>
                                <li>
                                    <h5>Pruebalo ya!</h5>
                                </li>
                            </ul>
                        </footer>

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

            //owl carousel

            $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                    navigation: true,
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true,
                    autoPlay: true

                });
            });

            //custom select box

            $(function() {
                $('select.styled').customSelect();
            });

        </script>

    </body>

    <!-- Mirrored from thevectorlab.net/flatlab/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2014 01:40:00 GMT -->
</html>