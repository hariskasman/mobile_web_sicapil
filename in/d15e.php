<?php 
include ("../sec/15.php"); 
include("d15s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 29.75rem;
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
		<form action="../inc/d15e.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>USER PROFILE</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				</div>
				<hr class="thin"/>
				<img src="<?php echo $rw['pic']; ?>" alt="user profile" width="200px" height="200px">
				<input type="hidden" name="id" value="<?php echo $rw ['id']?>" >
				<div class="input-control text full-size" data-role="input">
				PICTURES :
				<input type="text" name="pic" value="<?php echo $rw['pic']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				USERNAME :
				<input type="text" name="username" value="<?php echo $rw['username']; ?>" size="25" readonly>
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PASSWORD :
				<input type="text" name="password" value="<?php echo $rw['password']; ?>" size="25" >
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
