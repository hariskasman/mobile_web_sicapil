<?php 
include ("../sec/17.php"); 
include("d17s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body > 


<div class="container"> 
<div class="content img thumbnail">
<?php include ("../sec/amenu.php"); ?>
		<h3 >Master Product </h3>
		
		<button class="button loading-pulse lighten primary" onclick="location='d17a.php';" >Add Product</button>

		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>Name / Unit</th>
				<th>Image / Qty</th>
				<th>Price / Profit</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM product WHERE stores='" .$_SESSION['stores']. "'");
		while ($rw = $res->fetch_assoc()):
		$harga = $rw['price'];
		$profit = $rw['profit'];
		?>

			<tr align="center">
				<td>
				<?php echo $rw['name'] ?> / 
				<a class="label label-primary"><?php echo $rw['unit'] ?></a>
				</td>
				<td>
				<img src="<?php echo $rw['pic']?>" width='55px' height='55px'/> /
				<a class="label label-primary"><?php echo $rw['qty'] ?></a>
				</td>
				<td>
				<?php echo "Rp " .number_format($harga). ",-"; ?> /
				<a class="label label-primary"><?php echo "Rp " .number_format($profit). ",-"; ?></a>
				</td>
				<td>
				<a href="d17e.php?u=<?php echo $rw['codx'] ?>"><span class="fa fa-pencil" aria-hidden="true"></span></a>
				<a onclick="return confirm('Are you want deleting data')" href="d17d.php?u=<?php echo $rw['codx'] ?>"><span class="fa fa-trash" ></span></a>
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
