<?php 
include ("../sec/4.php"); 
include("d4s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<body> 


<div class="container"> 
<div class="content img thumbnail">
<?php include ("../sec/amenu.php"); ?>
		<h3 >All Slide </h3>
		<br/>
		<button class="button loading-pulse lighten primary" onclick="location='d4a.php';" >Add Slide</button>

		<table border="0.5px" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>Name</th>
				<th>Image / Sort</th>
				<th>Color</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM slide ORDER BY id DESC");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td>
				<a class="label label-primary"><?php echo $rw['stat'] ?></a>
				<?php echo $rw['name'] ?>
				</td>
				<td>
				<img src="<?php echo $rw['pic']?>" width='35px' height='35px'/>
				<a class="label label-success"><?php echo $rw['sort'] ?></a>
				</td>
				<td><?php echo $rw['name_color'] ?></td>
				<td>
				<a href="d4e.php?u=<?php echo $rw['codx'] ?>">EDIT</a> /
				<a onclick="return confirm('Are you want deleting data')" href="d4d.php?u=<?php echo $rw['codx'] ?>">DEL</a>
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
