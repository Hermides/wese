<?php
if (!isset($this->user->correo)) {
    redirect('in/login');
}
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from thevectorlab.net/flatlab/dynamic_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2014 01:42:06 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="img/favicon.html">

        <title>CAMP WESE</title>

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
            <?php $this->load->view('nav-lista-block'); ?>
            <!--sidebar end-->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <!-- page start-->
                    <div class="row">
                        <div class="col-sm-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    Lista de Campa&ntilde;as
                                    <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                    </span>
                                </header>
                                <div class="panel-body">
                                    <div class="adv-table">

                                        <?php
                                        //lista view camp
                                        $data['administrador'] = TRUE;
                                        $this->load->view('view_function/tabla_lista01_1',$data);
                                        ?>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <!-- Right Slidebar end -->
                    <!--footer start-->
                    <footer class="site-footer">
                        <div class="text-center">
                            2013 &copy; FlatLab by VectorLab.
                            <a href="#" class="go-top">
                                <i class="fa fa-angle-up"></i>
                            </a>
                        </div>
                    </footer>
                    <!--footer end-->
                </section>

                <!-- js placed at the end of the document so the pages load faster -->

                <script src="<?php echo base_url(); ?>/repos/js/jquery.js"></script>
                <script src="<?php echo base_url(); ?>/repos/js/jquery-ui-1.9.2.custom.min.js"></script>
                <script src="<?php echo base_url(); ?>/repos/js/jquery-migrate-1.2.1.min.js"></script>
                <script src="<?php echo base_url(); ?>/repos/js/bootstrap.min.js"></script>
                <script class="include" type="text/javascript" src="<?php echo base_url(); ?>/repos/js/jquery.dcjqaccordion.2.7.js"></script>
                <script src="<?php echo base_url(); ?>/repos/js/jquery.scrollTo.min.js"></script>
                <script src="<?php echo base_url(); ?>/repos/js/jquery.nicescroll.js" type="text/javascript"></script>
                <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>/repos/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>/repos/assets/data-tables/DT_bootstrap.js"></script>
                <script src="<?php echo base_url(); ?>/repos/js/respond.min.js" ></script>

                <!--right slidebar-->
                <script src="<?php echo base_url(); ?>/repos/js/slidebars.min.js"></script>

                <!--dynamic table initialization -->
                <script src="<?php echo base_url(); ?>/repos/js/dynamic_table_init.js"></script>


                <!--common script for all pages-->
                <script src="<?php echo base_url(); ?>/repos/js/common-scripts.js"></script>

                </body>
                </html>

