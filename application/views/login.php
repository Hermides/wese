<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from thevectorlab.net/flatlab/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2014 01:44:13 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="http://snapsoft.com.do/repos_wese/assets/images/favicon.ico" />

        <title>Lola Proyect</title>
        <?php $this->load->view('view_function/css'); ?>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-body">

        <div class="container">
            <?php
            /* inicio de sessin */
            $this->load->view('view_function/form_login');
            /* fin code */
            ?>
            <div class="registration">
                <?php if (@$error_login): ?>
                    <p class="alert alert-warning">Error en el usuario o contrase&ntilde;a.</p>
                    <br />
                <?php endif; ?>

                <?php echo @validation_errors(); ?>
                <?php
                if (isset($_GET['error201'])) {
                    echo '<p class="alert alert-danger">houston tenemos un problema, ya contamos con el correo en el software!</p>';
                }

                if (isset($_GET['welcome'])) {
                    echo '<p class="alert alert-success">Todo marcha bien, Bienvenido a <b>WESEAD</b> puede entrar a la plataforma ya.</p>';
                }
                ?>
                
            </div>

            <!-- Registro --
            <div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Saludos!  unete al proyecto</h4>
                        </div>
                        <div class="modal-body">
                            <?php
                            /* registro de usuario */
                            #$this->load->view('view_function/formulario_registro');
                            /* fin code */
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <?php
    $this->load->view('view_function/js');
    ?>
</body>
<!-- Mirrored from thevectorlab.net/flatlab/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jul 2014 01:44:13 GMT -->
</html>
