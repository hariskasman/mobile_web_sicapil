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
				<th></th>
				<th>Product Name / Unit / Qty</th>
				<th>Price</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM sales WHERE trx ='$_GET[u]'");
		while ($row = $res->fetch_assoc()):
		$price = $row['price'];
		$total = $row['total'];
		?>

			<tr align="center">
				<td> / <?php echo $row['sku'] ?></td>
				<td>
					<?php echo $row ['prd'] ?> /
					<?php echo $row['unit'] ?> /
					<?php echo $row['qty'] ?>
				</td>
				<td><?php echo "Rp " .number_format($price). ",-"; ?></td>
				<td><?php echo "Rp " .number_format($total). ",-"; ?></td>
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
