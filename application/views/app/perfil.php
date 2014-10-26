<!DOCTYPE html>
<html>
    <head>
        <title>Wese | Mobile perfil </title>
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
        <!-- website wrapper starts -->
        <div class="websiteWrapper"> 

            <!-- main menu wrapper starts -->
            <?php $this->load->view('app/menu'); ?>
            <!-- main menu wrapper ends --> 

            <!-- header wrapper starts -->
            <?php $this->load->view('app/logo'); ?>
            <!-- header wrapper ends --> 

            <!-- page wrapper starts -->
            <div class="pageWrapper"> 

                <!-- page content wrapper starts -->
                <div class="pageContentWrapper"> 

                    <!-- table ends -->
                    <div class="textBreakBottom"></div>
                    <h4 class="blockTitle">Mi perfil:</h4>
                    <!-- large quote starts -->
                    <div class="quoteWrapper"> <a href="" class="quoteAvatar"><img src="<?php echo base_url('repos/app/images/common/commentAvatarBg.png'); ?>" alt=""></a>
                        <blockquote>
                            <cite><?php echo $this->user->nick; ?></cite>
                            <hr>
                            <cite><?php echo $this->user->email; ?></cite>
                            <hr>
                            <cite><?php
                            /*calculamos la edad*/
                                $fecha = $this->user->fecha_n;
                                $edad = explode('-',$fecha);
                                $cal1 = $edad[2];
                                $cal2 = date('Y');
                                echo "Edad: ";
                                echo $cal2 - $cal1;
                                ?></cite>
                        </blockquote>
                    </div>
                    <!-- regular quote ends --
                    <div class="textBreakBoth"></div>
                    <h4 class="blockTitle">Alert Boxes:</h4>
                    <!-- alert box starts --
                    <div class="alertBox alertBoxWarning">
                      <p class="alertBoxContent">Ut enim ad mini ma veniam, quis nostrum exerci tationem ullam corporis suscipit labor iosam.</p>
                      <a href="" class="alertBoxButton"></a> </div>
                    <!-- alert box ends --> 
                    <!-- alert box starts --
                    <div class="alertBox alertBoxStop">
                      <p class="alertBoxContent">Ut enim ad mini ma veniam, quis nostrum exerci tationem ullam corporis suscipit labor iosam.</p>
                      <a href="" class="alertBoxButton"></a> </div>
                    <!-- alert box ends --> 
                    <!-- alert box starts --
                    <div class="alertBox alertBoxGo">
                      <p class="alertBoxContent">Ut enim ad mini ma veniam, quis nostrum exerci tationem ullam corporis suscipit labor iosam.</p>
                      <a href="" class="alertBoxButton"></a> </div>
                    <!-- alert box ends --> 
                    <!-- alert box starts --
                    <div class="alertBox alertBoxInfo alertBoxTextBreak">
                      <p class="alertBoxContent">Ut enim ad mini ma veniam, quis nostrum exerci tationem ullam corporis suscipit labor iosam.</p>
                      <a href="" class="alertBoxButton"></a> </div>
                    <!-- alert box ends --
                    <div class="textBreakBoth"></div>
                    <h4 class="blockTitle">Highlighted Texts:</h4>
                    <!-- highlighted texts start -->
                    <div class="textBreakBottom"></div>
                </div>
                <!-- page content wrapper ends --> 

            </div>
            <!-- page wrapper ends --> 

            <!-- footer wrapper starts -->
            <div class="footerWrapper"> <span class="copyright">&copy; copyright plank.</span> </div>
            <!-- footer wrapper ends --> 

        </div>
        <!-- website wrapper ends -->
    </body>
    <?php $this->load->view('app/js'); ?>
</html>
