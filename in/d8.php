<?php 
include ("../sec/8.php"); 
include("d8s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container" border="10"> 
<div class="content" >
<?php include ("../sec/amenu.php"); ?>
		<h3 >All Mobile Menu </h3>
		<br/>
		<button class="button loading-pulse lighten primary" onclick="location='d8a.php';">Add Mobile Menu</button>

		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>Name</th>
				<th>Namec / Color</th>
				<th>Url</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM menum");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td><?php echo $rw['name']; ?></td>
				<td>
				<?php echo $rw['namec']; ?> / 
				<?php echo $rw['color']; ?> 
				</td>
				<td><?php echo $rw['url'] ?></td>
				<td>
				<a href="d8ee.php?u=<?php echo $rw['codx'] ?>">EDIT /</a>
				<a onclick="return confirm('Are you want deleting data')" href="d8d.php?u=<?php echo $rw['codx'] ?>">DEL</a>
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
