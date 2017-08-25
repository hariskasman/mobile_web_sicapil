<?php 
ini_set('display_errors',0);
include ("config.php");

session_start();
if(!isset($_SESSION['log1']))
	{
	header("Location:logout.php");
	}
?>

<form action="u1a.php" method="POST" enctype="multipart/form-data">

	<label for="foto">FOTO : </label> <br/>
	<input type="file" name="foto" id="foto" accept=".doc,.docx,.xls,.xlsx,.png,.jpg,.gif,.JPG" onChange="makeFileList();" value=""> <br/>
	<ul id="fileList"></ul>
	<input type="text" name="pic" id="val1" value="" readonly>
	
	<br/>
	<input type="submit" value="ENTER">
</form>

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
	
	