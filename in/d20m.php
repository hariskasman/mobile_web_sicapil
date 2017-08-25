<?php 
include ("../sec/20.php"); 
include("d20s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container" border="10"> 
<div class="content" >
<?php include ("../sec/amenu.php"); ?>
		<h3 >Sales By Month </h3>
		<br/>
		<button class="button loading-pulse lighten primary" onclick="location='d20.php';">Sales by Day</button>

		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>/ Trx</th>
                <th>Cashier</th>
				<th>Total</th>
				<th>Net Profit</th>
            </tr>
		</thead>
		<tbody>

<?php
$res = $link->query("SELECT * FROM tran WHERE mt='$mt' AND stores='" .$_SESSION['stores']. "' AND stat='close'");
while ($row = $res->fetch_assoc()):
$bayar = $row ['bayar'];
$sisa = $row ['sisa'];
$total = $row ['total'];
$net_profit = $row ['net_profit'];
?>

			<tr align="center">
				<td>/ <?php echo $row['trx'] ?></td>
                <td><?php echo $row['cashier'] ?></td>
				<td><?php echo "Rp " .number_format($total). ",-"; ?></td>
				<td><?php echo "Rp " .number_format($net_profit). ",-"; ?></td>
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
