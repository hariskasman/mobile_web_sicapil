<?php 
include ("../sec/22.php"); 
include("d22s.php");
?>

<!DOCTYPE html>

	
<?php include ("../lib/liba.php"); ?>


<body class="bg-lightBlue"> 



<div class="content" align="center">  
<?php include ("../sec/amenu.php"); ?>

<style>
        .login-form {
            width: 20rem;
            height: 15.75rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }
</style>
<div class="container" border="10"> 
<div class="content" >
<table border="0.5px" style="background-color:#FFFFFF;" size="50" align="center" class="table table-striped table-bordered table-hover border bordered" id="dataTables-example" >
		   
		
		<thead>
			<tr >
				<th>Name</th>
				<th>Note</th>
				<th>Exe</th>
			</tr>
		</thead>
		<tbody>

		<?php
		$res = $link->query("SELECT * FROM log_note WHERE codx='$_GET[u]'");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr align="center">
				<td><?php echo $rw['username'] ?></td>
				<td><?php echo $rw['kerja'] ?></td>
				<td><a class="fa fa-file-image-o" href="../up/log/<?php echo $rw ['pic']; ?>" onclick="../up/log/<?php echo $rw ['pic']; ?>"></a></td>
			</tr>
	
		<?php
		endwhile;
		?>				
					
		</tbody>       
		</table>
</div>
</div>


<div class="login-form padding20 block-shadow">




		<form action="../inc/d22n.php" method="post" enctype="multipart/form-data">
				<div align="center">
				<h1 class="text-light"><small><h3>NOTE LOG</h3></small></h1>
				<input type="hidden" name="tgl" value="<?php echo $dt ?>" >
				<input class="form-control" name="tanggal" type="hidden" value="<?php echo date("Y-m-d"); ?>" readonly>
				<input type="hidden" name="codx" value="<?php echo $_GET ['u']; ?>" >
				</div>
				<hr class="thin"/>	
				<input type="hidden" placeholder="username.." name="username" value="<?php echo $_SESSION ['log1']; ?>" size="25" readonly>
				<div class="input-control text full-size" data-role="input">
				NOTE :			
				<input type="text" placeholder="note.." name="kerja" value="" size="25" >				
				</div>
				<br/>
				<br/>
				<div class="input-control text full-size" data-role="input">
				<input type="file" name="foto" id="foto" onChange="makeFileList();" value=""> <br/>
				<ul id="fileList"></ul>
				<input type="hidden" name="pic" id="val1" value="#" readonly>
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
