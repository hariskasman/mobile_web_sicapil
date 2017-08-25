<?php 
include ("../sec/26.php"); 
include("d26s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container"> 
<div class="content img thumbnail">
<?php include ("../sec/amenu.php"); ?>
		<h3 >Master Buku Tamu </h3>
		<br/>
		<button class="button" onclick="location='d26p.php';">PRINT</button>
		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		<thead>
			<tr >
				<th></th>
				<th>Image</th>
				<th>Nama Lengkap</th>
				<th>Jabatan</th>
				<th>Alamat</th>
				<th>Nomor Hp</th>
				<th>Tanggal</th>
				<th>Waktu</th>
				<th>Tujuan</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM tamu");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td></td>
				<td><img src="camfoto/<?php echo $rw ['pic']; ?>" alt="image" width="100px" height="100px"></td>
				<td><?php echo $rw['nama'] ?></td>
				<td><?php echo $rw['jabatan'] ?></td>
				<td><?php echo $rw['alamat'] ?></td>
				<td><?php echo $rw['hp'] ?></td>
				<td><?php echo $rw['tanggal'] ?></td>
				<td><?php echo $rw['waktu'] ?></td>
				<td><?php echo $rw['tujuan'] ?></td>
				<td>
				<a onclick="return confirm('Are you want deleting data')" href="d26d.php?u=<?php echo $rw['id'] ?>"><span >DEL</span></a>
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
