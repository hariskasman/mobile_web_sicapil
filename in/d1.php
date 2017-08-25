<?php 
include ("../sec/1.php"); 
include("d1s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container" border="10"> 
<div class="content" >
<?php include ("../sec/amenu.php"); ?>
		<h3 >All Post </h3>
		<br/>
		<button class="button loading-pulse lighten primary" onclick="location='d1a.php';">Add Post</button>
		<button class="button loading-pulse lighten primary" onclick="location='d1k.php';">Kategori</button>
		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>Name</th>
				<th>Post Stat</th>
				<th>Title / Kategori</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM post ORDER BY id DESC");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td><?php echo $rw['name'] ?></td>
				<td><a class="label label-success"><?php echo $rw['stat']; ?> </a></td>
				<td><?php echo $rw['judul']; ?> / <?php echo $rw['kat']; ?></td>
				<td>
				<a href="d1e.php?u=<?php echo $rw['codx'] ?>">EDIT</a> /
				<a onclick="return confirm('Are you want deleting data')" href="d1d.php?u=<?php echo $rw['codx'] ?>">DEL</a>
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
