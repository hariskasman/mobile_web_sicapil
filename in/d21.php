<?php 
include ("../sec/21.php"); 
include("d21s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container" border="10"> 
<div class="content" >
<?php include ("../sec/amenu.php"); ?>

		Daily Log : <input type="text" value="<?php echo $smlog; ?> Minute" readonly><br/>
		Daily Time Log : <input type="text" value="<?php echo $tl; ?>" readonly><br/>
		Null Log : <input type="text" value="<?php echo $bl; ?>" readonly><br/>
		
		<h3 >Berkas </h3>
		<h3 style="color:blue;"><?php echo date ('d/m/Y'); ?> </h3>
		<br/>
		<button class="button loading-pulse lighten primary" onclick="location='d21a.php';">Tambah Berkas</button>
		<button class="button loading-pulse lighten info" onclick="location='d21y.php';">Semua Berkas</button>
		<button onclick="location='d21pd.php?u=<?php echo $rsc['username'] ?>';" class="button">PRINT</button>
		<button onclick="location='d21pp.php?u=<?php echo $rsc['username'] ?>';" class="button">PRINT ALL</button>
		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>1</th>
				<th>Activity</th>
				<th>Time</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$tanggal = date("d/m/Y");
		echo $tanggal;
		$res = $link->query("SELECT * FROM log_book WHERE username ='" .$_SESSION['log1']. "' AND tgl ='".$tanggal."' ORDER BY id DESC");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td></td>
				<td><?php echo $rw['kerja'] ?> <a class="fa fa-file-image-o" href="../up/log/<?php echo $rw ['pic']; ?>" onclick="../up/log/<?php echo $rw ['pic']; ?>"></a></td>
				<td><?php echo $rw['menit'] ?></td>
				<?php
				$qx = "SELECT * FROM log_note WHERE codx='" .$rw['codx']. "'";
				$rx = mysqli_query ($link,$qx);
				$rsx = mysqli_fetch_array ($rx);
				$rsxc=mysqli_num_rows($rx);
                ?>
				
				<td>
				<a class="button" href="d21n.php?u=<?php echo $rw['codx']; ?>"><span aria-hidden="true"><b style="color:green;"><?php echo $rsxc; ?></b> Note</span></a>
				<a href="d21e.php?u=<?php echo $rw['codx'] ?>"><span aria-hidden="true">EDIT |</span></a>
				<a onclick="return confirm('Are you want deleting data')" href="d21d.php?u=<?php echo $rw['codx'] ?>"><span >DEL</span></a>
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
