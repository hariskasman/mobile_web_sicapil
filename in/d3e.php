<?php 
include ("../sec/3.php"); 
include("d3s.php");
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
		<form action="../inc/d3e.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>EDIT PRODUCT</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				</div>
				<hr class="thin"/>
				
				<input type="hidden" name="id" value="<?php echo $rsa ['id']?>" >
				<div class="input-control text full-size" data-role="input">
				Name :
				<input type="text" placeholder="isi name page.." name="name" value="<?php echo $rsa['name'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PIC :			
				<input type="text" placeholder="isi pictures link.." name="pic" value="<?php echo $rsa['pic'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				Description :
				<textarea name="des" rows="5" cols="26"><?php echo $rsa['des'] ?></textarea>
				</div>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				Price :			
				<input type="text" placeholder="price.." name="price" value="<?php echo $rsa['price'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				Page :			
				<input type="text" placeholder="page.." name="page" value="<?php echo $rsa['page'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				OnSales :
				<textarea name="onsales" rows="5" cols="26"><?php echo $rsa['onsales'] ?></textarea>
				</div>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				Sort :
				<select > 
					<option value="">---</option>
					<option value="">HOME - Berada Depan</option>
					<option value="">HOMES - Berada Content</option>
				</select>	
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				<input type="text" placeholder="sort.." name="sort" value="<?php echo $rsa['sort'] ?>" size="25" >
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
