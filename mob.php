<?php
include("config.php");

$qo = "SELECT * FROM setting WHERE id='1'";
$rq = mysqli_query($link,$qo);
$ro = mysqli_fetch_array($rq); 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Isesware.com">
    <meta name="author" content="Haris Saktiawan Kasman">

    <title><?php echo $ro ['sis_name']; ?></title>
	<link rel='shortcut icon' type='image/x-icon' href='<?php echo $ro ['logo_a'] ?>' />

    <!-- Bootstrap Core CSS -->
    <link href="mob/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="mob/css/stylish.css" rel="stylesheet">
    <link href="mob/css/hariskasman.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	
	<style type="text/css">
	<?php
	$resa = $link->query("SELECT * FROM ico");
	while ($rowa = $resa->fetch_assoc()):
	?>
	#services .service .icon .img.<?php echo $rowa ['name']; ?>{background: url("<?php echo $rowa ['pic']; ?>") no-repeat;background-size: 100%;}
	<?php 
	endwhile;
	?>
	
	
	#harisk{background: url("<?php echo $ro ['mob_def']; ?>") repeat;} 
	#services{padding-bottom: 60px;background: url("<?php echo $ro ['mob_def']; ?>") repeat;}
	#services .container{background: url("<?php echo $ro ['mob_def']; ?>") repeat;position: relative;}
	#services .title-wrapper{background: url("<?php echo $ro ['mob_iklan']; ?>") repeat;position: absolute;left: 0;top: 0;height: 100%;padding: 60px;max-width: 420px;}
	#services .services-wrapper .row{background: url("<?php echo $ro ['mob_bgbtn']; ?>") repeat;} 
	#services .service{background: url("<?php echo $ro ['mob_bgbtn']; ?>") repeat;position: relative;text-align: center;color: #252525;border-top: 1px solid #ECECED;border-left: 1px solid #ECECED;padding: 10px;cursor: pointer;box-sizing: border-box;}
	<!-- .dot{display: block;background: url("#") repeat #FFF;background-size: 10px 10px;} -->
	</style>
	
</head>

<body>

    <!-- Navigation -->


    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center" style="background-image:url(<?php echo $ro ['mob_bg'] ?>);">
          <a href="#" >
            <img class="img-portfolio img-responsive" src="<?php echo $ro ['logo_a']; ?>" width="<?php echo $ro ['logo_width']?>px" height="<?php echo $ro ['logo_height']?>px">
          </a>
		
                   <!-- SERVICES -->
			<section id="services">
			<div class="container">
				<div class="row">
				
					<div class="col-md-5 dot content-section title-wrapper " >
					<img class="img-portfolio img-responsive" src="<?php echo $ro ['pic_mob']; ?>" width="<?php echo $ro ['pm_width']?>px" height="<?php echo $ro ['pm_height']?>px" onclick="location.href='<?php echo $ro ['pic_mob']; ?>'">	
					</img>	
					<div class="line"></div>
					</div>
					<div class="col-md-7 col-md-offset-5 services-wrapper">
						<div class="row">
							<?php
							$res = $link->query("SELECT * FROM menum");
							while ($row = $res->fetch_assoc()):
							?>
							<!--##-->
							<div class="service col-md-3 col-sm-4 col-xs-6" >
								<div class="icon harisk" >
									<div class="table">
										<div class="wrapper">
											<div class="img <?php echo $row ['namec']; ?>" onclick="location.href='<?php echo $row ['url']; ?>'"></div>
											<h4><label style="color:#<?php echo $row ['color']; ?>" onclick="location.href='<?php echo $row ['url']; ?>'"" ><?php echo $row ['name']; ?></label></h4>
										</div>
									</div>
								</div>
							</div>
							<?php 
							endwhile;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>	
			
</section>

    </header>


    <!-- jQuery -->
    <script src="mob/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="mob/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
