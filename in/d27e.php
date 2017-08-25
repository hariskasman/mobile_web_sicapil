<?php 
include ("../sec/27.php"); 
include("d27s.php");
?>

<!DOCTYPE html>

	
<?php include ("../lib/liba.php"); ?>


<body class="bg-lightBlue"> 



<div class="content" align="center">  
<?php include ("../sec/amenu.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 34.75rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
</style>

<div class="login-form padding20 block-shadow">
		<form action="../inc/d27e.php" method="post" enctype="multipart/form-data">
				<div align="center">
				<h1 class="text-light"><small><h3>EDIT ROOM</h3></small></h1>
				<input type="hidden" name="id" value="<?php echo $rsa ['id']?>" >
				</div>
				<hr class="thin"/>
				<div class="input-control text full-size" data-role="input">
				USERNAME :			
				<input type="text" placeholder="username.." name="username" value="<?php echo $_SESSION ['log1']; ?>" size="25" readonly>
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PIC : 
				<input type="file" name="foto" id="foto" onChange="makeFileList();" value=""> <br/>
				<ul id="fileList"></ul>
				<input type="hidden" name="pic" id="val1" value="#" readonly>
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				PIC BG :			
				<input type="text" placeholder="pic background.." name="pic_bg" value="<?php echo $rsa ['pic_bg']?>" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				ROOM :			
				<input type="text" placeholder="nama ruangan.." name="nama" value="<?php echo $rsa ['nama']?>" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				DES :			
				<input type="text" placeholder="description.." name="des" value="<?php echo $rsa ['des']?>" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				STATUS "big,mid,sml" :			
				<input type="text" placeholder="status.." name="status" value="<?php echo $rsa ['status']?>" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				LOCATION :			
				<input type="text" placeholder="lokasi.." name="location" value="<?php echo $rsa ['location']?>" size="25" >				
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
