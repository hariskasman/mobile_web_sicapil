<?php 
include ("../sec/27.php"); 
include("d27s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container" border="10"> 
<div class="content" >
<?php include ("../sec/amenu.php"); ?>
		
		<h3 >All Room / Item [ <?php echo $_GET[u]; ?> ]</h3>
		<br/>
		<button class="button loading-pulse lighten primary" onclick="location='d27a.php';">Add Room / Item</button>
		<button class="button loading-pulse lighten info" onclick="location='d27ix.php';">ALL </button>
		<form action="d27v.php?u=<?php echo $_GET['u']; ?>" method="GET">
		<select name="u">
			<option value="big">BIG</option>
			<option value="mid">MID</option>
			<option value="sml">SMALL</option>
			<option value="">ALL</option>
		</select>
		<input type="submit" class="button loading-pulse lighten success" >
		</form>
		
		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		<thead>
			<tr >
				<th>1</th>
				<th>Pic</th>
				<th>Room / Item</th>
				<th>Des</th>
				<th>Location</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM ruang WHERE status='$_GET[u]' ORDER BY id DESC");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td></td>
				<td><img src="../up/room/<?php echo $rw ['pic']; ?>" alt="image" width="100px" height="100px"></td>
				<td>
				<?php echo $rw['nama'] ?>
				<a href="d27i.php?u=<?php echo $rw['nama'] ?>"><span aria-hidden="true">ITEM | </span></a>
				<a href="d27m.php?u=<?php echo $rw['nama'] ?>"><span aria-hidden="true">SUB </span></a>
				</td>
				<td><?php echo $rw['des'] ?></td>
				<td><?php echo $rw['location'] ?></td>
				<td>
				<a href="d27ve.php?u=<?php echo $rw['nama'] ?>"><span aria-hidden="true">MAP |</span></a>
				<a href="d27e.php?u=<?php echo $rw['codx'] ?>"><span aria-hidden="true">EDIT |</span></a>
				<a onclick="return confirm('Are you want deleting data')" href="d27d.php?u=<?php echo $rw['codx'] ?>"><span >DEL</span></a>
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
