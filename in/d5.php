<?php 
include ("../sec/5.php"); 
include("d5s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container"> 
<div class="content img thumbnail">
<?php include ("../sec/amenu.php"); ?>
		<h3 >All Profile </h3>
		<button class="button loading-pulse lighten success" onclick="location='d5z.php';"> AKTIF </button>
		<button class="button loading-pulse lighten danger" onclick="location='d5x.php';"> NON-AKTIF </button>
		<br/>
		<br/>

		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>Name</th>
				<th>Image</th>
				<th>Des</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM business ORDER BY id DESC");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td><?php echo $rw['name'] ?></td>
				<td><img src="<?php echo $rw['pic']?>" width='35px' height='35px'/></td>
				<td><?php echo $rw['des'] ?></td>
				<td>
				<a href="d5e.php?u=<?php echo $rw['codx'] ?>">EDIT</a>
				</td>
			</tr>
	
		<?php
		endwhile;
		?>				
					
		</tbody>       
		</table>
    </div>
	
		

<!-- Bootstrap Table Js -->
<script src="../mod/bootstrap_table/js/jquery.min.js"></script>
<script src="../mod/bootstrap_table/js/bootstrap.min.js"></script>
<script src="../mod/bootstrap_table/js/metisMenu.min.js"></script>
<script src="../mod/bootstrap_table/js/jquery.dataTables.min.js"></script>
<script src="../mod/bootstrap_table/js/dataTables.bootstrap.min.js"></script>		

         


</div>
<?php include ("../lib/lib2.php"); ?>
</div><!--end wrap-->

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
</script>
	
</body>
</html>
