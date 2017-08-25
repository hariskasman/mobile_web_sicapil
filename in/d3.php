<?php 
include ("../sec/3.php"); 
include("d3s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body > 


<div class="container"> 
<div class="content img thumbnail">
<?php include ("../sec/amenu.php"); ?>
		<h3 >All Product </h3>
		
		<button class="button loading-pulse lighten success" onclick="location='d3z.php';"> AKTIF </button>
		<button class="button loading-pulse lighten danger" onclick="location='d3x.php';"> NON-AKTIF </button>
		<br/>
		<br/>
		<button class="button loading-pulse lighten primary" onclick="location='d3a.php';" >Add Product</button>

		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>Name</th>
				<th>Image / Sort</th>
				<th>Price</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM product ORDER BY id DESC");
		while ($rw = $res->fetch_assoc()):
		$harga = $rw['price'];
		?>

			<tr align="center">
				<td><?php echo $rw['name'] ?></td>
				<td>
				<img src="<?php echo $rw['pic']?>" width='35px' height='35px'/>
				<a class="label label-primary"><?php echo $rw['sort'] ?></a>
				</td>
				<td><?php echo "Rp " .number_format($harga). ",-"; ?></td>
				<td>
				<a href="d3e.php?u=<?php echo $rw['codx'] ?>">EDIT</a> /
				<a onclick="return confirm('Are you want deleting data')" href="d3d.php?u=<?php echo $rw['codx'] ?>">DEL</a>
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
