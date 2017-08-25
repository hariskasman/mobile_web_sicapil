<?php 
include ("../sec/6.php"); 
include("d6s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 49.75rem;
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
		<form action="../inc/d6e.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>EDIT GALLERY</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				</div>
				<hr class="thin"/>
				
				<input type="hidden" name="id" value="<?php echo $rsa ['id']?>" >
				
				<div class="input-control text full-size" data-role="input">
				DATE :			
				<input type="text" name="tgl" value="<?php echo $rsa['tgl'] ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				NAME :
				<input type="text" name="name" value="<?php echo $rsa['name'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				NAME COLOR :			
				<input type="text" name="name_col" value="<?php echo $rsa['name_col'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SMALL PIC :			
				<input type="text" name="small_pic" value="<?php echo $rsa['small_pic'] ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PIC :			
				<input type="text" name="pic" value="<?php echo $rsa['pic'] ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				WT :			
				<input type="text" name="wt" value="<?php echo $rsa['wt'] ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				HT :			
				<input type="text" name="ht" value="<?php echo $rsa['ht'] ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				HELP :
				
				<select > 
					<option value="">---</option>
					<option value="">ADS - Kiri Content</option>
					<option value="">HOME - Berada Depan</option>
					<option value="">NEW - Berita Content</option>
					<option value="">NEWS - Berita Home</option>
					<option value="">IKLAN - Iklan Home</option>
				</select>
				<br/>
				<br/>
				<input type="text" name="sort" value="<?php echo $rsa['sort'] ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SMALL DES :			
				<input type="text" name="small_des" value="<?php echo $rsa['small_des'] ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				DES COLOR :			
				<input type="text" name="des_color" value="<?php echo $rsa['des_color'] ?>" size="25" > 
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PAGE :			
				<input type="text" name="page" value="<?php echo $rsa['page'] ?>" size="25" > 
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
