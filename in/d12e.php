<?php 
include ("../sec/12.php"); 
include("d12s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body class="bg-lightBlue"> 


<div class="content" align="center">
  
<?php include ("../sec/amenu.php"); ?> 

<div class="img-thumbnail" align="center">
		
		<form action="../inc/d12e.php" method="post">
				<b>UPLOAD </b><br/>
				
				<input type="hidden" name="id" value="<?php echo $rsa ['id']?>" >
				<br>SEBELUM :
				<br><input type="text" name="name" value="<?php echo $rsa['name'] ?>" size="25" ></br>
				<br>SESUDAH :
				<br><input type="text" name="baru" value="<?php echo $rsa['baru'] ?>" size="25" ></br>
				<br><input class="btn btn-default" value="UPDATE" type="submit"></div>
		</form>	
		
		
		<div class="img-thumbnail">
			<button class="btn btn-success" onclick="location='../<?php echo $rsa['baru']; ?>';">UPLOAD NOW</button>
			<button class="btn btn-success" onclick="location='../m/m12e.php';">MOBILE NOW</button>
		</div>
		
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
