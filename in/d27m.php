<?php 
include ("../sec/27.php"); 
include("d27s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container" border="10"> 
<div class="content" >
<?php include ("../sec/amenu.php"); ?>
		
		<h3 >View <?php echo $_GET[u]; ?> </h3>
		<button onclick="location='d27p.php?u=<?php echo $rsb['room'] ?>';" class="button">PRINT</button>
		<button onclick="location='d27pp.php?u=<?php echo $rsb['room'] ?>';" class="button">PRINT PIC</button>
		<br/>
		
		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>1</th>
				<th>Pic</th>
				<th>Item</th>
				<th>Satuan</th>
				<th>Room</th>
				<th>Location</th>
				<th>Qty</th>
				<th>Terima Dari</th>
				<th>Taruh</th>
				<th>Tanggal</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM inventory WHERE room='$_GET[u]'");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td></td>
				<td><img src="<?php echo $rw ['ipic']; ?>" alt="image" width="100px" height="100px"></td>
				<td><?php echo $rw['iname'] ?></td>
				<td><?php echo $rw['satuan'] ?></td>
				<td><?php echo $rw['room'] ?></td>
				<td><?php echo $rw['detail_room'] ?></td>
				<td><?php echo $rw['qty'] ?></td>
				<td><?php echo $rw['terima'] ?></td>
				<td><?php echo $rw['taruh'] ?></td>
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
