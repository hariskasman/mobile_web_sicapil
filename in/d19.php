<?php 
include ("../sec/19.php"); 
include("d19s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container" border="10"> 
<div class="content" >
<?php include ("../sec/amenu.php"); ?>
		<h3 >All Hold Transaction </h3>
		<br/>

		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		<thead>
			<tr >
				<th>/ Trx</th>
				<th>Date</th>
				<th>Cashier</th>
				<th>Total</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM tran WHERE stores='" .$_SESSION['stores']. "' AND stat='hold'");
		while ($row = $res->fetch_assoc()):
		$total = $row['total'];
		$net_profit = $row ['net_profit'];
		?>

			<tr align="center">
				<td>/ <?php echo $row['trx'] ?></td>
				<td><?php echo $row['dt'] ?></td>
				<td><?php echo $row['cashier'] ?></td>
				<td><?php echo "Rp " .number_format($total). ",-"; ?></td>
				<td>
				<a href="d19t.php?u=<?php echo $row['trx'] ?>"><span class="fa fa-desktop" aria-hidden="true"></span></a>
				<a href="d19p.php?u=<?php echo $row['trx'] ?>"><span class="fa fa-file-text" aria-hidden="true"></span></a>
				<a onclick="return confirm('Are you want deleting data')" href="d19d.php?u=<?php echo $row['trx'] ?>"><span class="fa fa-trash" aria-hidden="true"></span></a>
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
