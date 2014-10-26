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

        <title>Login app</title>
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
            $user = array(
                'name' => 'username',
                'class' => 'form-control',
                'style' => 'width: 80%',
                'type' => 'text',
            );

            $passwd = array(
                'name' => 'password',
                'class' => 'form-control',
                'style' => 'width: 80%',
                'type' => 'password',
            );

            $email = array(
                'name' => 'email',
                'class' => 'form-control',
                'style' => 'width: 80%',
                'type' => 'email',
            );

            $date = array(
                'name' => 'date',
                'class' => 'form-control',
                'style' => 'width: 80%; ',
                'type' => 'date',
            );


            echo form_open();
            echo "<hr>";
            echo form_label('Username');
            echo form_input($user);
            echo form_label('password');
            echo form_input($passwd);
            echo form_label('Email');
            echo form_input($email);
            echo form_label('Fecha de nacimineto');
            echo form_input($date);
            echo "<button type='submit' class='btn btn-success'>Listo!</button>";
            echo form_close();
            ?>
        </div>
    </body>
</html>
