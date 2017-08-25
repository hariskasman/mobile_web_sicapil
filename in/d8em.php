<?php 
include ("../sec/8.php"); 
include("d8s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 58.75rem;
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
		<b>MOBILE MENU :</b>
		<button class="button loading-pulse lighten primary" onclick="location='d8.php';"> MENU </button>
		<button class="button loading-pulse lighten primary" onclick="location='d8i.php';"> ICON </button>
		<br/>
		<b>MOBILE WEB :</b>
		<button class="button loading-pulse lighten primary" onclick="location='d8m.php';"> MENU WEB</button>
		<form action="../inc/d8em.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>MOBILE SETTING</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				</div>
				<hr class="thin"/>
				
				<input type="hidden" name="id" value="<?php echo $rs ['id']?>" >
				<div class="input-control text full-size" data-role="input">
				SISTEM NAME :
				<input type="text" name="sis_name" value="<?php echo $rs['sis_name']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				MOBILE LOGO :
				<input type="text" name="logo_a" value="<?php echo $rs['logo_a']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				LOGO WIDTH :
				<input type="text" name="logo_width" value="<?php echo $rs['logo_width']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				LOGO HEIGHT:
				<input type="text" name="logo_height" value="<?php echo $rs['logo_height']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				ICON :			
				<input type="text" name="icon" value="<?php echo $rs['icon']; ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PIC MOBILE :
				<input type="text" name="pic_mob" value="<?php echo $rs['pic_mob']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				IKLAN MOBILE WIDTH :
				<input type="text" name="pm_width" value="<?php echo $rs['pm_width']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				IKLAN MOBILE HEIGHT :
				<input type="text" name="pm_height" value="<?php echo $rs['pm_height']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				Semua yang warna lain harus terisi full
				<div class="input-control text full-size" data-role="input">
				BG BINGKAI LUAR :			
				<input type="text" name="mob_def" style="background-color:#E4E2E2" value="<?php echo $rs['mob_def']; ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				BG BACKGROUND IKLAN MOBILE :			
				<input type="text" name="mob_iklan" style="background-color:#E4E2E2" value="<?php echo $rs['mob_iklan']; ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				BG BACKGROUND MOBILE LOGO :			
				<input type="text" name="mob_bg" style="background-color:#E4E2E2" value="<?php echo $rs['mob_bg']; ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				BG MENU BUTTON :			
				<input type="text" name="mob_bgbtn" style="background-color:#E4E2E2" value="<?php echo $rs['mob_bgbtn']; ?>" size="25" > 
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
