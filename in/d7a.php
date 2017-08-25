<?php 
include ("../sec/7.php"); 
include("d7s.php");
?>

<!DOCTYPE html>

	
<?php include ("../lib/liba.php"); ?>


<body class="bg-lightBlue"> 



<div class="content" align="center">  
<?php include ("../sec/amenu.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 18.75rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
</style>

<div class="login-form padding20 block-shadow">
		<form action="../inc/d7a.php" method="post">
				<div align="center">
				<h1 class="text-light"><small><h3>ADD USERS</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				<input type="hidden" name="codx" value="gafs<?php echo print rand(1, 1000000); ?>435gf<?php echo date("mY");?>jh455<?php echo date("Ym");?>gffdas435<?php echo date("hisa"); ?>fds" >
				</div>
				<hr class="thin"/>
				<div class="input-control text full-size" data-role="input">
				USERNAME :			
				<input type="text" placeholder="username.." name="username" value="" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PASSWORD :			
				<input type="text" placeholder="password.." name="password" value="" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				STORES :
				<input type="text" placeholder="stores.." name="stores" value="" size="25" >
				</div>
				<br/>
				<br/>
				<button type="submit" class="button primary loading-cube light">Enter</button>
			</form>	
</div>


</div><!--end wrap-->

</body>
</html>
