<?php 
include ("../sec/8.php"); 
include("d8s.php");
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

<body> 


<div class="content" align="center">
  
<?php include ("../sec/amenu.php"); ?>

<div class="login-form padding20 block-shadow">
		<form action="../inc/d8ee.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>MOBILE MENU</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				</div>
				<hr class="thin"/>
				<input type="hidden" name="id" value="<?php echo $rsa ['id']?>" >
				<div class="input-control text full-size" data-role="input">
				MENU NAME :
				<input type="text" name="name" value="<?php echo $rsa['name'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				MENU CODE :
				<input type="text" name="namec" value="<?php echo $rsa['namec'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				COLOR TEXT :			
				<input type="text" placeholder="color.." name="color" value="" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				URL :
				<input type="text" name="url" value="<?php echo $rsa['url'] ?>" size="25" >
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
