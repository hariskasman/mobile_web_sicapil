<?php 
include ("../sec/6.php"); 
include("d6s.php");
?>

<!DOCTYPE html>

	
<?php include ("../lib/liba.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 13.75rem;
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
		<form action="../inc/d6a.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>ADD GALLERY</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				<input type="hidden" name="codx" value="gafs<?php echo print rand(1, 1000000); ?>435gf<?php echo date("mY");?>jh455<?php echo date("Ym");?>gffdas435<?php echo date("hisa"); ?>fds" >
				</div>
				<hr class="thin"/>
				<div class="input-control text full-size" data-role="input">
				PIC:
				<input type="text" placeholder="picture link.." name="pic" value="" size="25" >
				</div>	
				<br/>
				<br/>			
				<button type="submit" class="button primary loading-cube light">Enter</button>
			</form>	
</div>


</div><!--end wrap-->

</body>
</html>
