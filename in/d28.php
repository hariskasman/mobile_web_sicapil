<?php 
include ("../sec/28.php"); 
include("d28s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container" border="10"> 
<div class="content" >
<?php include ("../sec/amenu.php"); ?>
		
		<h3 >All Purchase </h3>
		<br/>
		<button class="button loading-pulse lighten primary" onclick="location='d28a.php';">Add Order</button>
		<button class="button loading-pulse lighten info" onclick="location='d28ma.php';">Add Item</button>
		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>1</th>
				<th>Name</th>
				<th>Des</th>
				<th>Data</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM beli");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td></td>
				<td>
				<?php echo $rw['nama'] ?> / 
				<small style="color:blue;">created : <?php echo $rw['username']; ?>-<?php echo $rw['tgl']; ?></small>
				</td>
				<td>
				<?php echo $rw['des']; ?> /
				<small style="color:blue;">updated : <?php echo $rw['username_upt']; ?>-<?php echo $rw['tgl_upt']; ?></small>
				</td>
				<td><a href="../up/beli/<?php echo $rw['pic'] ?>">Download</a></td>
				<td>
				<a href="d28m.php?u=<?php echo $rw['nama'] ?>">VIEW</a> /
				<a href="d28e.php?u=<?php echo $rw['codx'] ?>">EDIT</a> /
				<a onclick="return confirm('Are you want deleting data')" href="d28d.php?u=<?php echo $rw['codx'] ?>">DEL</a>
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
