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
<!-- website wrapper starts -->
<div class="websiteWrapper"> 
  
  <!-- main menu wrapper starts -->
  <?php $this->load->view('app/menu'); ?>
  <!-- main menu wrapper ends --> 
  
  <!-- header wrapper starts -->
  <?php $this->load->view('app/logo'); ?>
  <!-- header wrapper ends --> 
  
  
  
  <!-- page wrapper starts -->
  <div id="content" class="portfolioOneFilterableWrapper">
            <div class="portfolioFilterableItemsWrapper" id="portfolioFilterableItemsWrapper">
   <?php $this->load->view('app/camp'); ?>
            </div>
  </div>
    <!-- highlighted content wrapper ends --> 
  </div>
  <!-- page wrapper ends --> 
  
  <!-- footer wrapper starts -->
  <div class="footerWrapper"> <span class="copyright">&copy; copyright plank.</span> </div>
  <!-- footer wrapper ends --> 
  
</div>
<!-- website wrapper ends -->
</body>
<?php $this->load->view('app/js'); ?>
<script>
setInterval(function() {
    $("#content").load(location.href+" #content>*","");
}, 5000);
</script>
</html>