<?php 
include ("../sec/8.php"); 
include("d8s.php");
?>

<!DOCTYPE html>

	
<?php include ("../lib/liba.php"); ?>


<body> 



<div class="content" align="center">  
<?php include ("../sec/amenu.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 19.75rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
</style>

<div class="login-form padding20 block-shadow">
		<form action="../inc/d8ia.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>ADD ICON</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				<input type="hidden" name="codx" value="gafs<?php echo print rand(1, 1000000); ?>435gf<?php echo date("mY");?>jh455<?php echo date("Ym");?>gffdas435<?php echo date("hisa"); ?>fds" >
				</div>
				<hr class="thin"/>
				<div class="input-control text full-size" data-role="input">
				NAME CODE :			
				<input type="text" placeholder="namec.." name="name" value="" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				URL PICTURES :
				<input type="text" placeholder="pic.." name="pic" value="" size="25" >
				</div>
				<br/>
				<br/>
				<button type="submit" class="button primary loading-cube light">Enter</button>
			</form>	
</div>


</div><!--end wrap-->

</body>
</html>
