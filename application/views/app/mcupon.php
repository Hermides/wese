<!DOCTYPE html>
<html>
    <head>
        <title>WESE | Mobile HTML/CSS app</title>
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
        <?php $this->load->view('app/css'); ?>
        <!-- CSS files end -->


    </head>
    <body>
        <div class="portfolioOneFilterableWrapper">
            <div class="portfolioFilterableItemsWrapper" id="portfolioFilterableItemsWrapper">
                <div class="portfolioFilterableItemInfoWrapper">
                    <?php
                    foreach ($mcupon as $row) {
                        echo "<p><b>Mi cupon:</b> " . $row->md5 . "<br>campa&ntilde;a: " . $row->camp . "</p><hr/>";
                    }
                    ?>
                    <p><a class="buttonWrapper buttonRed buttonNo" href="<?php echo base_url('app/'); ?>">Regresar</a></p>
                </div>
            </div>
        </div>
    </body>
    <?php $this->load->view('app/js'); ?>
</html>
