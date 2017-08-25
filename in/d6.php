<?php 
include ("../sec/6.php"); 
include("d6s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container"> 
<div class="content img thumbnail">
<?php include ("../sec/amenu.php"); ?>
		<h3 >All Gallery </h3>
		<button class="button loading-pulse lighten success" onclick="location='d6z.php';"> AKTIF </button>
		<button class="button loading-pulse lighten danger" onclick="location='d6x.php';"> NON-AKTIF </button>
		<br/>
		<br/>
		<button class="button loading-pulse lighten primary" onclick="location='d6a.php';" >Add Gallery</button>

		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th></th>
				<th>Name</th>
				<th>Position</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM gallery ORDER BY id DESC");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td></td>
				<td><?php echo $rw['name']?></td>
				<td><?php echo $rw['sort']?></td>
				<td>
				<a href="d6e.php?u=<?php echo $rw['codx'] ?>">EDIT </a> /
				<a onclick="return confirm('Are you want deleting data')" href="d6d.php?u=<?php echo $rw['codx'] ?>">DEL </a> 
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
