<?php 
include ("../sec/29.php"); 
include("d29s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container" border="10"> 
<div class="content" >
<?php include ("../sec/amenu.php"); ?>
		
		<h3 >All Moving Item </h3>
		Description : <br/>
		O = Memindahkan salah satu barang <br/>
		A = Memindahkan semua barang <br/>
		C = Mengganti quantity dan gambar barang <br/>
		X = Menghapus salah satu barang <br/>
		<br/> 	
		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>1</th>
				<th>Pic</th>
				<th>Item</th>
				<th>Satuan</th>
				<th>Room</th>
				<th>Location</th>
				<th>Qty</th>
				<th>Terima</th>
				<th>Bukti Terima</th>
				<th>Taruh</th>
				<th>Tanggal</th>
				<th>Proses</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM inventory");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td></td>
				<td><img src="<?php echo $rw ['ipic']; ?>" alt="image" width="200px" height="200px"></td>
				<td><?php echo $rw['iname'] ?></td>
				<td><?php echo $rw['satuan'] ?></td>
				<td><?php echo $rw['room'] ?></td>
				<td><?php echo $rw['detail_room'] ?></td>
				<td><?php echo $rw['qty'] ?></td>
				<td><?php echo $rw['terima'] ?></td>
				<td><img src="<?php echo $rw ['pic_terima']; ?>" alt="image" width="200px" height="200px"></td>
				<td><?php echo $rw['taruh'] ?></td>
				<td><?php echo $rw['tgl'] ?></td>
				<td>
				<a href="d29v.php?u=<?php echo $rw['codx'] ?>"><span aria-hidden="true">O </span></a>
				<a href="d29e.php?u=<?php echo $rw['codx'] ?>"><span aria-hidden="true">A </span></a>
				<a href="d29c.php?u=<?php echo $rw['codx'] ?>"><span aria-hidden="true">C </span></a>
				<a onclick="return confirm('Are you want deleting data')" href="d29d.php?u=<?php echo $rw['codx'] ?>"><span >X</span></a>
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
