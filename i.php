<!DOCTYPE html>
<html lang="en">

<?php 
include ("config.php"); 

$q = "SELECT * FROM setting WHERE id='1'";
$r = mysqli_query($link,$q);
$rw = mysqli_fetch_array($r); 
?>	

<head>
    <meta charset="utf-8">
    <title><?php echo $rw ['sis_name']; ?></title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    
    <link rel='shortcut icon' type='image/x-icon' href='up/ico.png' />
    
    <!-- Bootstrap CSS -->
    <link href="open/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- expedition CSS -->
    <link href="i/css/animated-expedition.css" rel="stylesheet">
    <link href="i/css/expedition-style.css" rel="stylesheet">
    <link href="i/css/queries-expedition.css" media="all" rel="stylesheet" type="text/css">
        
</head>
<body style="overflow-y:hidden">

<!-- preloader -->
<div class="preloader">
 <div class="mainpreloader"><span></span></div>	
</div>
<!-- preloader end -->

<!-- website -->
<div id="wraperexpedition">
 
 

  <!-- background -->
  <div class="bgexpedition"><img class="animfadebg" src="i/img/bg-ifma.jpg" ></div>
 
  <!-- navigation -->
  <!-- logo -->
  <div id="logo" class="brand-expedition noselect animfadeInLeft" data-time="0">
  <a href="#"><img alt="background" src="i/img/logo.png"></a>
  </div>
  

   <!-- content home -->
<div class="contentexpedition" >

  <div class="row" align="right" style="position: fixed; bottom:-120px; right:0px;"><!-- row -->
          <!-- col -->
          <div style="right:20px; position: relative; margin-bottom:0px"><img src="i/img/kp.png" width="66%" alt=""/></div>
          <div class="btn-home animfadeInLeft" data-time="2100"><a class="link-class" href="in" >INDONESIAN FEMALE MARINER</a></div><br>
         <!-- col end  <div class="btn-home animfadeInRight" data-time="2400"><a class="link-class" href="#" target="_blank"></a></div> -->
        
          
          <!-- col end -->
  </div><!-- row end -->
  
</div>
<!-- content home end --> 
    



<!-- footer -->

        <div align="center" data-time="900" style="background-color:#000; height:40px; bottom:0px;position: absolute;display: block; width:100%; padding-top:10px; font-size:11px;">
        	© 2016  INDONESIAN FEMALE MARINER.  All rights reserved.
            <span style="font-size:14px;">
                <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>&nbsp;
                <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>&nbsp;
                <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
            </span>
        </div>


<!-- footer end -->

</div>
<!-- website end -->

<!-- Plugin JS -->
<script src="i/js/pluginsexpedition.js" type="text/javascript"></script>
<!-- expedition JS -->
<script src="i/js/expedition.js" type="text/javascript"></script> 
</body>

</html>
