<?php 
include ("../sec/19.php"); 
include("d19s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body > 


<div class="container"> 
<div class="content ">
<?php include ("../sec/amenu.php"); ?>
		<h3 >Point Of Sales </h3>
		
									
									<div>
									<div align="right"><label for="sum" ><h1><strong style="color:#05124B" ><?php echo "Rp " .number_format($total_hold). ",-"; ?></strong></h1></label></div>
									<br> <a>Cashier :</a>
									<?php echo $rsb ['cashier']; ?> <br/>
									<a>Date :</a>
									<?php echo $rsb ['dt']; ?> <br/>
									<a>Trx :</a>
									<?php echo $rsb ['trx']; ?> <br/>
									-------------------------- <br/>
									Hold Trx :
									<b><?php echo $dt; ?> </b><br/>		
									Hold Cashier :
									<b><?php echo ($_SESSION['log1']."<br />"); ?></b>
									</div>
									<?php include ("pos_hold.php"); ?>
									

								<div >
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
								$res = $link->query("SELECT * FROM sales WHERE trx='$_GET[u]' AND sto='" .$_SESSION['stores']. "' AND stat='hold' AND cashier='" .$_SESSION['log1']. "'");
								while ($row = $res->fetch_assoc()):
								$harga = $row ['price'];
								$qty = $row ['qty'];
								$total = $row ['total'];
								?>
													  
														<tr align="center">
														  <td><a class="label label-default">SKU [<?php echo $row['sku'] ?>]</a>  <?php echo $row['prd'] ?></td>
														  <td><strong style="color:#05124B"> <?php echo $row['qty'] ?>  </strong><a class="label label-default"><?php echo $row['unit'] ?></a>  </td>
														  <td><?php echo "Rp " .number_format($harga). ",-"; ?></td>
														  <td><strong><?php echo "Rp " .number_format($total). ",-"; ?></strong></td>
														  <td>
														  <a href="d19td.php?u=<?php echo $row['id'] ?>"><span class="fa fa-times" aria-hidden="true"></span></a>
														  </td>
														</tr>

								<?php
								endwhile;
								?>
													  </tbody>
								</table>
								
								<button align="right" onclick="location='d19b.php?u=<?php echo $rsb['trx'] ?>';"/>Payment</button>
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


    