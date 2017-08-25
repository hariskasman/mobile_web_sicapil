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
            height: 26.75rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
</style>

<div class="login-form padding20 block-shadow">
		<form action="../inc/d28ma.php" method="post" enctype="multipart/form-data">
				<div align="center">
				<h1 class="text-light"><small><h3>ADD ITEM</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				<input type="hidden" name="username" value="<?php echo $_SESSION['log1']; ?>" >
				<input class="form-control" name="tanggal" type="hidden" value="<?php echo date("Y-m-d"); ?>" readonly>
				<input type="hidden" name="codx" value="gafs<?php echo print rand(1, 1000000); ?>435gf<?php echo date("mY");?>jh455<?php echo date("Ym");?>gffdas435<?php echo date("hisa"); ?>fds" >
				</div>
				<hr class="thin"/>
				<div class="input-control text full-size" data-role="input">
				<input type="file" name="foto" id="foto" onChange="makeFileList();" value=""> <br/>
				<ul id="fileList"></ul>
				<input type="hidden" name="pic" id="val1" value="#" readonly>
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				NAME :			
				<input type="text" placeholder="item name.." name="nama" value="" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				SATUAN :			
				<input type="text" placeholder="satuan item.." name="satuan" value="" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PURCHASE ORDER:			
				<select name="beli">
					<option value="@gmail.com">----</option>
					
					<?php
					$resa = $link->query("SELECT * FROM beli");
					while ($rowa = $resa->fetch_assoc()):
					?>
					<option value="<?php echo $rowa['nama']; ?>"><?php echo $rowa['nama']; ?></option>
					<?php 
					endwhile;
					?>
				</select>				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				QTY :				
				<input type="text" placeholder="quantity.." name="qty" value="" size="25" >				
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
