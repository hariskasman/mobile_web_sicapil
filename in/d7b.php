<?php 
include ("../sec/7.php"); 
include("d7s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="content" align="center">
  
<?php include ("../sec/amenu.php"); ?> 

<div class="img-thumbnail" align="center">
		
		<form action="../inc/d7b.php" method="post">
				<b>BACKUP SETTING </b><br/>
				
				<input type="hidden" name="id" value="<?php echo $rsb ['id']?>" >
				<br>SEBELUM :
				<br><input type="text" name="bk_sebelum" value="<?php echo $rsb['bk_sebelum'] ?>" size="25" ></br>
				<br>SESUDAH :
				<br><input type="text" name="bk_sesudah" value="<?php echo $rsb['bk_sesudah'] ?>" size="25" ></br>
				<br><input class="btn btn-default" value="UPDATE" type="submit"></div>
		</form>	
		
		
		<div class="img-thumbnail">
			<button class="btn btn-success" onclick="location='../<?php echo $rsb['bk_sesudah']; ?>/bk.php';">BACKUP NOW </button>
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
