<?php 
include ("../sec/22.php"); 
include("d22s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container"> 
<div class="content img thumbnail">
<?php include ("../sec/amenu.php"); ?>
		<h3 >(<?php echo $nm; ?>) All Log </h3>
		<img src="<?php echo $rsa ['pic']; ?>" alt="image" width="100px" height="100px">
		<br/>
		<input type="text" value="All Log : <?php echo $smloga; ?> Minute" readonly>
		<input type="text" value="All Time : <?php echo $tla; ?>" readonly><br/>
		<button onclick="location='d22py.php?u=<?php echo $rsa['codx'] ?>';" class="button">PRINT</button>
		<br/>
		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		<thead>
			<tr >
				<th>Date</th>
				<th>Activity</th>
				<th>Minute</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM log_book WHERE username='" .$nm. "' ORDER BY id DESC");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td> | <?php echo $rw['tgl'] ?> </td>
				<td><?php echo $rw['kerja'] ?> <a class="fa fa-file-image-o" href="../up/log/<?php echo $rw ['pic']; ?>" onclick="../up/log/<?php echo $rw ['pic']; ?>"></a></td>
				<?php
				$qx = "SELECT * FROM log_note WHERE codx='" .$rw['codx']. "'";
				$rx = mysqli_query ($link,$qx);
				$rsx = mysqli_fetch_array ($rx);
				$rsxc=mysqli_num_rows($rx);
                ?>
				<td><?php echo $rw['menit'] ?></td>
				<td><a class="button" href="d22n.php?u=<?php echo $rw['codx']; ?>"><span aria-hidden="true"><b style="color:green;"><?php echo $rsxc; ?></b> Note</span></a></td>
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
