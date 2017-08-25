<?php 
include ("../sec/21.php"); 
include("d21s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 20.75rem;
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
		<form action="../inc/d21e.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>EDIT LOG</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				</div>
				<hr class="thin"/>
				<input type="hidden" name="id" value="<?php echo $rsa ['id']?>" >
				<div class="input-control text full-size" data-role="input">
				USERNAME :			
				<input type="text" placeholder="username.." name="username" value="<?php echo $_SESSION ['log1']; ?>" size="25" readonly>
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				AKTIFITAS :			
				<input type="text" placeholder="aktifitas.." name="kerja" value="<?php echo $rsa ['kerja']?>" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				MENIT :			
				<input type="text" placeholder="menit.." name="menit" value="<?php echo $rsa ['menit']?>" size="25" >				
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
