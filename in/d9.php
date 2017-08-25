<?php 
include ("../sec/9.php"); 
include("d9s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container"> 
<div class="content img thumbnail">
<?php include ("../sec/amenu.php"); ?>
		<h3 >All Comment </h3>
		<br/>

		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>Username</th>
				<th>Description</th>
				<th>Sort</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM testi");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td><?php echo $rw['name']; ?></td>
				<td><?php echo $rw['des']; ?></td>
				<td>
				<?php echo $rw['sort'] ?>
				<label class="label label-default" style="color:blue;"><?php echo $rw['stat'] ?></label>
				</td>
				<td>
				<a href="d9a.php?u=<?php echo $rw['id'] ?>">AKTIF</a> /
				<a onclick="return confirm('Are you want deleting data')" href="d9d.php?u=<?php echo $rw['id'] ?>">DEL</a>
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
