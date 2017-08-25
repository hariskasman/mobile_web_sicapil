<?php 
include ("../sec/24.php"); 
include("d24s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container"> 
<div class="content img thumbnail">
<?php include ("../sec/amenu.php"); ?>
		<h3 >All Users Log </h3>
		<br/>
		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		<thead>
			<tr >
				<th></th>
				<th>Image</th>
				<th>Fullname</th>
				<th>Username</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM pengguna");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<th></th>
				<td><img src="<?php echo $rw ['pic']; ?>" alt="image" width="100px" height="100px"></td>
				<td><?php echo $rw['fullname'] ?></td>
				<td><?php echo $rw['username'] ?></td>
				<td>
				<a href="d22d.php?u=<?php echo $rw['username'] ?>"><span class="fa fa-tags" aria-hidden="true"></span></a>
				<a href="d22m.php?u=<?php echo $rw['username'] ?>"><span class="fa fa-tasks" aria-hidden="true"></span></a>
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
