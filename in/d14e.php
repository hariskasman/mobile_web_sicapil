<?php 
include ("../sec/14.php"); 
include("d14s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 25.75rem;
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
		<form action="../inc/d14e.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>SHADOW</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				</div>
				<hr class="thin"/>
				
				<input type="hidden" name="id" value="<?php echo $rs ['id']?>" >
				<a onclick="location='http://www.color-hex.com/';" href="http://www.color-hex.com/"> COLOR CODE </a>
				<div class="input-control text full-size" data-role="input">
				SHADOW BANNER :
				<input type="text" name="shadow" value="<?php echo $rs['shadow']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SHADOW BTN :
				<input type="text" name="shadow_btn" value="<?php echo $rs['shadow_btn']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SHADOW BOX :
				<input type="text" name="shadow_box" value="<?php echo $rs['shadow_box']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SHADOW SLIDE :		
				<input type="text" name="shadow_slide" value="<?php echo $rs['shadow_slide']; ?>" size="25" > 
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
