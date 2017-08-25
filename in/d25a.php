<?php 
include ("../sec/25.php"); 
include("d25s.php");
?>

<?php
	include("../config.php");
	$qz = "SELECT * FROM tamu ORDER BY id DESC LIMIT 1";
	$rz = mysqli_query ($link,$qz);
	$rsz = mysqli_fetch_array ($rz);

	$urut = "ABS00";
	$nourut = $rsz['id'] + 1;
?>


<!DOCTYPE html>
    <title>BUKU TAMU</title>

    <link href="../public/css/metro.css" rel="stylesheet">
    <link href="../public/css/metro-icons.css" rel="stylesheet">
    <link href="../public/css/metro-responsive.css" rel="stylesheet">
    <link href="../public/css/metro-schemes.css" rel="stylesheet">

    <link href="../public/css/docs.css" rel="stylesheet">

    <script src="../public/js/jquery-2.1.3.min.js"></script>
    <script src="../public/js/metro.js"></script>
    <script src="../public/js/docs.js"></script>
    <script src="../public/js/prettify/run_prettify.js"></script>
    <script src="../public/js/ga.js"></script>

<body class="bg-lightBlue"> 
<br/>
<br/>
<br/>
<br/>
<div align="center">
<label style="color:#FFFFFF;"><b> Area : <?php echo $_SESSION[log1]; ?> | <?php echo $nourut; ?></b></label>
</div>
<div align="center">
<label style="color:#FFFFFF;"><?php echo gethostname(); ?> | <?php date_default_timezone_set('Asia/Jakarta'); $tgl = date("d/m/Y"); echo $tgl; ?> | Last Guest :  <?php date_default_timezone_set('Asia/Jakarta'); $jam = date("h:i:s A"); echo $jam; ?></label>
</div>
<?php include ("camb.php"); ?>

<div align="center">
	<br/>
	<form action="../inc/d25a.php" method="post">
	<input hidden type="text" placeholder="ip address.." name="ip" value="<?php echo gethostname(); ?>" size="25" readonly>
	<input hidden type="text" placeholder="tanggal.." name="tanggal" value="<?php echo date("d/m/Y"); ?>" size="25" readonly>
	<input hidden type="text" placeholder="time.." name="waktu" value="<?php date_default_timezone_set('Asia/Jakarta'); $jam = date("h:i:s A"); echo $jam; ?>" size="25" readonly> 
	<input hidden type="text" placeholder="pic.." name="pic" value="<?php $tes = date("Y-m-d"); echo $tes ?>-<?php echo $_SESSION[log1]; ?><?php echo $nourut; ?>.jpg" size="25" readonly>
	<input hidden type="text" placeholder="area.." name="area" value="<?php echo $_SESSION['log1']; ?>" size="25" >	
	<input type="text" placeholder="nama.." id="snapu" onchange="changeValue(this.value)" name="nama" value="" size="25" ><br/>
	<input type="text" placeholder="alamat.." name="alamat" value="" size="25" ><br/>
	<input type="text" placeholder="jabatan.." name="jabatan" value="" size="25" ><br/>
	<input type="text" placeholder="nomor hp.." name="hp" value="" size="25" ><br/>
	<input type="text" placeholder="maksud dan tujuan.." name="tujuan" value="" size="25" ><br/>
	<button type="submit" class="button primary loading-cube light">ENTER</button>  
	</form>
	

</div>

<div class="content" align="center">  
<?php include ("../sec/amenu.php"); ?>

</div>

<script language="javascript">
snapu.onkeyup = function(){
	document.getElementById('val1').value = document.getElementById('snapu').value;
}
</script>


</body>
</html>
