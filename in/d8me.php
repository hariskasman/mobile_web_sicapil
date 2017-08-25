<?php 
include ("../sec/8.php"); 
include("d8s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 31.75rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
</style>

<body class="bg-lightBlue"> 


<div class="content" align="center">
  
<?php include ("../sec/amenu.php"); ?>

<div class="login-form padding20 block-shadow">
		<form action="../inc/d8me.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>EDIT WEB MENU</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				</div>
				<hr class="thin"/>
				<input type="hidden" name="id" value="<?php echo $rsc ['id']?>" >
				<div class="input-control text full-size" data-role="input">
				NO :			
				<input type="text" placeholder="nomor.." name="nom" value="<?php echo $rsc ['nom']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				USERNAME :			
				<select name="username"> 
					<?php
					$res = $link->query("SELECT * FROM pengguna");
					while ($row = $res->fetch_assoc()):
					?>
					<option value="<?php echo $row ['username']; ?>"><?php echo $row ['username']; ?></option>
					<?php 
					endwhile;
					?>	
				</select>
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				NAME :			
				<input type="text" placeholder="name.." name="name" value="<?php echo $rsc ['name']?>" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PIC :			
				<input type="text" placeholder="picture.." name="pic" value="<?php echo $rsc ['pic']?>" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				WT :			
				<input type="text" placeholder="width.." name="wt" value="<?php echo $rsc ['wt']?>" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				HT :			
				<input type="text" placeholder="height.." name="ht" value="<?php echo $rsc ['ht']?>" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				URL :
				<input type="text" placeholder="url.." name="url" value="<?php echo $rsc ['url']?>" size="25" >
				</div>
				<br/>
				<br/>
				<button type="submit" class="button primary loading-cube light">UPDATE</button>
		</form>	
</div>
</div>
	
		

<!-- Bootstrap Table Js -->
<script src="../mod/bootstrap_table/js/jquery.min.js"></script>
<script src="../mod/bootstrap_table/js/bootstrap.min.js"></script>
<script src="../mod/bootstrap_table/js/metisMenu.min.js"></script>
<script src="../mod/bootstrap_table/js/jquery.dataTables.min.js"></script>
<script src="../mod/bootstrap_table/js/dataTables.bootstrap.min.js"></script>		

  

<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
</script>
	
</body>
</html>
