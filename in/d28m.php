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
		
		<h3 >All Purchase Item </h3>
		<br/>
		<button class="button loading-pulse lighten primary" onclick="location='d28ma.php';">Add Item</button>
		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>1</th>
				<th>Pic</th>
				<th>Name</th>
				<th>Satuan</th>
				<th>Purchase</th>
				<th>Qty</th>
				<th>Tanggal</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM inventory WHERE beli='$_GET[u]'");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td></td>
				<td><img src="../up/inven/<?php echo $rw ['pic']; ?>" alt="image" width="100px" height="100px"></td>
				<td><?php echo $rw['nama'] ?></td>
				<td><?php echo $rw['satuan'] ?></td>
				<td><?php echo $rw['beli'] ?></td>
				<td><?php echo $rw['qty'] ?></td>
				<td><?php echo $rw['tgl'] ?></td>
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
