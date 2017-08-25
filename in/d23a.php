<?php 
include ("../sec/23.php"); 
include("d23s.php");
?>

<?php 
include("../config.php");
$qx = "SELECT * FROM pengguna WHERE username='" .$_SESSION['log1']. "'";
$rx = mysqli_query ($link,$qx);
$rsx = mysqli_fetch_array ($rx);


session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
 {
// username and password received from loginform 
$username=mysqli_real_escape_string($link,$_POST['username']);
$password=mysqli_real_escape_string($link,$_POST['password']);
	
$sql_query="SELECT id FROM pengguna WHERE username='$username' and password='$password'";
$result=mysqli_query($link,$sql_query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1)
	{
	
	date_default_timezone_set('Asia/Jakarta'); $jam = date("h:i:s A"); echo $jam;
	$qz = "SELECT * FROM absensi ORDER BY id DESC LIMIT 1";
	$rz = mysqli_query ($link,$qz);
	$rsz = mysqli_fetch_array ($rz);

	$urut = "ABS00";
	$nourut = $rsz['id'] + 1;
	
	
	$ip = mysqli_real_escape_string($link, $_POST['ip']);
	$tanggal = mysqli_real_escape_string($link, $_POST['tanggal']);
	$waktu = $jam;
	$username = mysqli_real_escape_string($link, $_POST['username']);
	$password = mysqli_real_escape_string($link, $_POST['password']);
	$pic = mysqli_real_escape_string($link, $_POST['pic']);
	$area = mysqli_real_escape_string($link, $_POST['area']);


 
// memasukan query
$sql = "INSERT INTO absensi 
( 
ip, 
tanggal, 
waktu, 
username, 
password,
pic,
area 
) 
VALUES 
( 
'$ip', 
'$tanggal', 
'$waktu', 
'$username', 
'$password',
'$pic',
'$area'
)";

//"NAMA TABLE DALAM DATABASE" (fname,lname,emaila) ------- (Nama Variable)

if(mysqli_query($link, $sql )){
    echo "Berhasil Menyimpan.";
} else{
    echo "Masalah: Tidak Bisa Mengeksekusi $sql. " . mysqli_error($link);
}
mysqli_close($link); 	
	}
	else
	{
	$error="Username or Password is invalid";
	}
	}
	
?>	


<!DOCTYPE html>

	
<?php include ("../lib/abs.php"); ?>



<body class="bg-lightBlue"> 
<br/>
<br/>
<br/>
<br/>

<div align="center">
<label style="color:#FFFFFF;"><b> Area : <i><?php echo $_SESSION[log1]; ?><i/></b></label>
</div>
<?php include ("cam_view.php"); ?>
<div align="center">
<label style="color:#FFFFFF;"><?php echo gethostname(); ?> | <?php date_default_timezone_set('Asia/Jakarta'); $tgl = date("d/m/Y"); echo $tgl; ?> | Last Absen :  <?php date_default_timezone_set('Asia/Jakarta'); $jam = date("h:i:s A"); echo $jam; ?></label>
</div>
<?php include ("cam.php"); ?>
<div align="center">
	<br/>
	<input type="password" placeholder="password.." name="password" id="snapu" onchange="changeValue(this.value)" value="" size="25" >
	<form action="" method="post">
	<input hidden type="text" placeholder="password.." name="password" id="val1" />
	<button type="submit" class="button primary loading-cube light">ABSEN</button>  
	<input hidden type="text" placeholder="ip address.." name="ip" value="<?php echo gethostname(); ?>" size="25" readonly>
	<input hidden type="text" placeholder="tanggal.." name="tanggal" value="<?php date_default_timezone_set('Asia/Jakarta'); $tgl = date("d/m/Y"); echo $tgl; ?>" size="25" readonly>
	<input hidden type="text" placeholder="time.." name="waktu" value="<?php date_default_timezone_set('Asia/Jakarta'); $jam = date("h:i:s A"); echo $jam; ?>" size="25" readonly> 
	<input hidden type="text" placeholder="pic.." name="pic" value="<?php $tes = date("Y-m-d"); echo $tes ?>-<?php echo $_SESSION[log1]; ?><?php echo $nourut; ?>.jpg" size="25" readonly>
	<input hidden type="text" placeholder="area.." name="area" value="<?php echo $_SESSION[log1]; ?>" size="25" readonly>	
	<input type="text" hidden placeholder="username.." id="uid" name="username" value="" size="25" readonly> 
	</form>
	
	<select > 
		<option value="">-- Lihat Absen --</option>
		<?php
		$res = $link->query("SELECT * FROM absensi WHERE tanggal='$dt'");
		while ($rw = $res->fetch_assoc()):
		?>
		<option value="">Username : <?php echo $rw['username'] ?> | Time : <?php echo $rw['waktu'] ?></option>
		<?php endwhile; ?>
	</select>
	

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
