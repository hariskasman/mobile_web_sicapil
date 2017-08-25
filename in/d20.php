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
		<h3 >Sales By Day </h3>
		<br/>
		<button class="button loading-pulse lighten primary" onclick="location='d20m.php';">Sales by month</button>
		<div align="center">Summary</div>
		<div align="center">
		<h5><strong> Profit by Day : <?php echo "Rp " .number_format($net_day). ",-"; ?></strong></h5>
		<h5><strong> Profit by Month : <?php echo "Rp " .number_format($net_month). ",-"; ?></strong></h5>
		</div>

		<div>
		<a>Sales by Month : <input type="text" value="<?php echo "Rp " .number_format($total_bulan). ",-"; ?>" readonly></a>
		</div>
		<div>
		<a>Opening Balance : <input type="text" value="<?php echo "Rp " .number_format($kas_awal). ",-"; ?>" readonly></a>
		</div>
		<div>
		<a>Store Name : <input type="text" value="<?php echo $_SESSION ['stores']; ?>" readonly></a>
		</div>
		<div>
		<a>Sales by Day : <input type="text" value="<?php echo "Rp " .number_format($total_harian). ",-"; ?>" readonly></a>
		</div>
		
		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>/ Trx</th>
				<th>Date</th>
				<th>Cashier</th>
				<th>Total</th>
				<th>Net Profit</th>
            </tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM tran WHERE dt='$dt' AND stores='" .$_SESSION['stores']. "' AND stat='close'");
		while ($row = $res->fetch_assoc()):
		$total = $row ['total'];
		$net_profit = $row ['net_profit'];
		?>

			<tr align="center">
				<td>/ <?php echo $row['trx'] ?></td>
				<td><?php echo $row['dt'] ?></td>
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
