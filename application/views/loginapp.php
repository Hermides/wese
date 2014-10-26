<!DOCTYPE html>
<html>
    <head>
        <title>Wese app</title>
        <!-- meta tags start -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="Keywords" content="plank, premium, mobile, template, HTML, Css" />
        <meta name="Description" content="Premium mobile HTML/CSS template." />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <!-- meta tags end -->

        <!-- favorite icon starts -->
        <link rel="shortcut icon" href="images/common/favicon.ico" type="image/x-icon" />
        <!-- favorite icon ends -->

        <!-- Google fonts start -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,400italic' rel='stylesheet' type='text/css' />
        <!-- Google fonts end -->

        <!-- CSS files start -->
        <link href="http://wese.snapsoft.com.do/repos/app/css/framework.css" rel="stylesheet" type="text/css" media="all" />
        <link href="http://wese.snapsoft.com.do/repos/app/css/colorbox.css" rel="stylesheet" type="text/css" media="all" />
        <link href="http://wese.snapsoft.com.do/repos/app/css/elements.css" rel="stylesheet" type="text/css" media="all" />
        <link href="http://wese.snapsoft.com.do/repos/app/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="http://wese.snapsoft.com.do/repos/app/css/responsive.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="http://wese.snapsoft.com.do/repos/app/css/hidpi.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="http://wese.snapsoft.com.do/repos/app/css/skin.css" rel="stylesheet" type="text/css" media="all" />
        <link href="http://wese.snapsoft.com.do/repos/app/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <!-- CSS files end -->

        <!-- JavaScript files start -->
        <script type="text/javascript" src="http://wese.snapsoft.com.do/repos/app/js/jquery.min.js"></script>
        <script type="text/javascript" src="http://wese.snapsoft.com.do/repos/app/js/effects.jquery-ui.min.js"></script>
        <script type="text/javascript" src="http://wese.snapsoft.com.do/repos/app/js/jquery.nivo-slider.min.js"></script>
        <script type="text/javascript" src="http://wese.snapsoft.com.do/repos/app/js/jquery.colorbox.min.js"></script>
        <script type="text/javascript" src="http://wese.snapsoft.com.do/repos/app/js/custom.js"></script>
        <!-- JavaScript files end -->
    </head>
    <style>
        .input{
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
        
        .btn-en {
            padding: 20px 20px;
            width: 120px;
        }
    </style>
    <body>
    <center>
        <?php if (@$error_login): ?>
            <p class="alert alert-warning">Error en el usuario o contrase&ntilde;a.</p>
            <br />
        <?php endif; ?>

        <?php echo @validation_errors(); ?>
        <!-- main menu wrapper starts -->
        <div class="container">
            <h1>Entrar a WESE</h1>
            <form class="form-signin" method="post">
                <input class="input" name="username" placeholder="Usuario"/>
                <input name="dispositivo" type="hidden" value="<?php echo gethostbyname($_SERVER['REMOTE_ADDR']); ?>"/>
                <button class="btn-en" type="submit" class="btn btn-circle">Entrar</button>
            </form>
        </div>
    </center>

</body>
</html>
