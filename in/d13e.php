<?php 
include ("../sec/13.php"); 
include("d13s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 31.75rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
</style>

<body class="bg-lightBlue"> 


<div class="content" align="center">
  
<?php include ("../sec/amenu.php"); ?>

<div class="login-form padding20 block-shadow">
		<form action="../inc/d13e.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>BACKGROUND IMAGE</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				</div>
				<hr class="thin"/>
				
				<input type="hidden" name="id" value="<?php echo $rs ['id']?>" >
				<div class="input-control text full-size" data-role="input">
				BG ADMIN LOGIN :
				<input type="text" name="bg_login" value="<?php echo $rs['bg_login']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				BG MENU ATAS :
				<input type="text" name="menu_atas" value="<?php echo $rs['menu_atas']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				BG MENU BWH :
				<input type="text" name="menu_bwh" value="<?php echo $rs['menu_bwh']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				BG SITE : 
				<input type="text" name="bg_site" value="<?php echo $rs['bg_site']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				BG IMAGES :
				<input type="text" name="bg_thumb" value="<?php echo $rs['bg_thumb']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				BG ADS :
				<input type="text" name="bg_ads" value="<?php echo $rs['bg_ads']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				BG BUTTON & BG NEWS :			
				<input type="text" name="bg_btn" value="<?php echo $rs['bg_btn']; ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<button type="submit" class="button primary loading-cube light">UPDATE</button>
		</form>	
</div>
</div>
	
		

<!-- Bootstrap Table Js -->
<script src="../mod/bootstrap_table/js/jquery.min.js"></script>
<script src="../mod/bootstrap_table/js/bootstrap.min.js"></script>
<script src="../mod/bootstrap_table/js/metisMenu.min.js"></script>
<script src="../mod/bootstrap_table/js/jquery.dataTables.min.js"></script>
<script src="../mod/bootstrap_table/js/dataTables.bootstrap.min.js"></script>		

  

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
</script>
	
</body>
</html>
