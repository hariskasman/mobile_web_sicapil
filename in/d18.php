<?php 
include ("../sec/18.php"); 
include("d18s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body > 


<div class="container"> 
<div class="content ">
<?php include ("../sec/amenu.php"); ?>
		<h3 >Point Of Sales </h3>
		
		<div>
		<div align="right"><label for="sum" ><h1><strong style="color:#05124B" ><?php echo "Rp " .number_format($total_bill). ",-"; ?></strong></h1></label></div>
		<?php 
		$tgl = date('d/m/Y');
		echo "Tanggal : " .$tgl ; 
		?>	
		<br> <a>Cashier :</a>
		<?php echo ($_SESSION['log1']."<br />"); ?>
		</div>
		
		<?php include ("pos_view.php"); ?>

		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>Name</th>
				<th>Qty</th>
				<th>Price </th>
				<th>Total</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM sales WHERE cashier='" .$_SESSION['log1']. "' AND sto='" .$_SESSION['stores']. "' AND stat='open' AND trx='$trx'");
		while ($row = $res->fetch_assoc()):
		$harga = $row ['price'];
		$qty = $row ['qty'];
		$total = $row ['total'];
		?>

			<tr align="center">
				<td><a class="label label-primary">SKU [<?php echo $row['sku'] ?>]</a> / <?php echo $row['prd'] ?></td>
				<td><a class="label label-primary"><?php echo $row['qty'] ?></a><a class="label label-default"><?php echo $row['unit'] ?></a></td>
				<td><?php echo "Rp " .number_format($harga). ",-"; ?></td>
				<td><strong><?php echo "Rp " .number_format($total). ",-"; ?></strong></td>
				<td>
				<a href="d18d.php?u=<?php echo $row['id'] ?>"><span class="fa fa-times" aria-hidden="true"></span></a>
				</td>
			</tr>
	
		<?php
		endwhile;
		?>				
					
		</tbody>       
		</table>
		
		<button align="right" class="button button primary" onclick="location='d18b.php';"/>Payment</button>
		<button align="right" class="button button success" onclick="location='d18h.php';"/>Hold</button>
    </div>
	
         


</div>
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
