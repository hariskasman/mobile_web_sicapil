<?php 
include ("../sec/28.php"); 
include("d28s.php");
?>

<!DOCTYPE html>

	
<?php include ("../lib/liba.php"); ?>


<body class="bg-lightBlue"> 



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
		<form action="../inc/d28e.php" method="post" >
				<div align="center">
				<h1 class="text-light"><small><h3>ADD ORDER</h3></small></h1>
				<input type="hidden" name="id" value="<?php echo $rsa ['id']?>" >
				<input type="hidden" name="tgl_upt" value="<?php echo $dt ?>" >
				<input type="hidden" name="username_upt" value="<?php echo $_SESSION['log1']; ?>" >
				<input type="hidden" name="codx" value="gafs<?php echo print rand(1, 1000000); ?>435gf<?php echo date("mY");?>jh455<?php echo date("Ym");?>gffdas435<?php echo date("hisa"); ?>fds" >
				</div>
				<hr class="thin"/>
				<div class="input-control text full-size" data-role="input">
				NAME :			
				<input type="text" placeholder="order name.." name="nama" value="<?php echo $rsa ['nama']; ?>" size="25" >
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				DES :			
				<input type="text" placeholder="description.." name="des" value="<?php echo $rsa ['des']; ?>" size="25" >				
				</div>
				<br/>
				<br/>
				<button type="submit" class="button primary loading-cube light">Enter</button>
			</form>	
</div>

<script type="text/javascript">
		function makeFileList() {
			var input = document.getElementById("foto");
			var ul = document.getElementById("fileList");
			while (ul.hasChildNodes()) {
				ul.removeChild(ul.firstChild);
			}
			for (var i = 0; i < input.files.length; i++) {
				var a = document.createElement("a");
				document.getElementById('val1').value = input.files[i].name;
				ul.appendChild(a);
			}
			if(!ul.hasChildNodes()) {
				var a = document.createElement("a");
				a.innerHTML = 'No Files Selected';
				ul.appendChild(a);
			}
			
		}
</script>

</div><!--end wrap-->

</body>
</html>
