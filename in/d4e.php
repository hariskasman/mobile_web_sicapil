<?php 
include ("../sec/4.php"); 
include("d4s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 43.75rem;
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
		<form action="../inc/d4e.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>EDIT SLIDE</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				</div>
				<hr class="thin"/>
				
				<input type="hidden" name="id" value="<?php echo $rsa ['id']?>" >
				<div class="input-control text full-size" data-role="input">
				NAME :
				<input type="text" name="name" value="<?php echo $rsa['name'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PICTURES :			
				<input type="text" name="pic" value="<?php echo $rsa['pic'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				NAME COLOR:
				<input type="text" name="name_color" value="<?php echo $rsa['name_color'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				DESCRIPTION :
				<textarea name="des" rows="5" cols="26"><?php echo $rsa['des'] ?></textarea>
				</div>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				DES COLOR :			
				<input type="text" placeholder="des color.." name="des_color" value="<?php echo $rsa['des_color'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SORT :	
				
				<select > 
					<option value="">---</option>
					<option value="">HOME - Berada Depan</option>
					<option value="">HOMES - Berada Content</option>
					<option value="">HOMETOP - Berada Atas Content</option>
				</select>	
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				<input type="text" placeholder="sort.." name="sort" value="<?php echo $rsa['sort'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				STATUS :		
				
				<select name="stat">
					<option value="">---</option>
					<option value="active">Yes</option>
					<option value="">No</option>
				</select>
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
