<?php
ini_set('display_errors',0);
include ("../sec/27.php");
include ("../config.php");

$q = "SELECT * FROM ruang WHERE nama='$_GET[u]'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);

$lokasi = $rs ['location'];
$qx = "SELECT * FROM ruang WHERE nama='$lokasi'";
$rx = mysqli_query ($link,$qx);
$rsx = mysqli_fetch_array ($rx);
?>

<html onmousedown="showCoords(event)"> 

  <link rel="stylesheet" href="../public/css/bootstrap.min.css">
  <link rel="stylesheet" href="../public/css/animate.min.css">

</head>
<body >


<section id="ext_menu-0">

    <nav class="navbar navbar-dropdown bg-color transparent navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                     
                    </div>

                </div>
                <div class="mbr-table-cell">
                      <p id="demo"></p>
					  
					
					
					<form action="../inc/d27ve.php" method="POST">
					 <input type="hidden" value="<?php echo $_GET['u']; ?>" name="nama">
					 <input type="text" name="kiri" id="left" value="<?php echo $rs['kiri'] ?>" size="5">
					 <input type="text" name="atas" id="atas" value="<?php echo $rs['atas'] ?>" size="5">
					 <a style="background-color:#000000;" >Width : </a><input type="text" name="width" value="<?php echo $rs['width'] ?>" size="5">
					 <a style="background-color:#000000;" >Height : </a><input type="text" name="height" value="<?php echo $rs['height'] ?>" size="5">
					 <input type="submit" class="button" accesskey="h" value="UPDATE">
					</form>
					
					 <form method="GET">
					 <select name="u"> 
						<option value="">-- All Item --</option>
						
						<?php
						$resa = $link->query("SELECT * FROM ruang WHERE location='$lokasi'");
						while ($rowa = $resa->fetch_assoc()):
						?>
						<option value="<?php echo $rowa ['nama']; ?>"><?php echo $rowa ['nama']; ?></option>
						<?php 
						endwhile;
						?>
					 </select>
					 <input type="submit" href="ed.php?u=<?php echo $_GET['u']; ?>" value="ENTER" class="button default" >
					 </form>
					 <a class="button" href="d27.php">MENU</a>
				

                </div>
            </div>

        </div>
    </nav>


<?php include ("../lib/libv.php"); ?>

		<img src="" style="widht:10px;height:10px;position:absolute;top:4000000px;left:6000000px;" />
	
	<?php
	$res = $link->query("SELECT * FROM ruang WHERE location='$lokasi'");
	while ($row = $res->fetch_assoc()):
	?>
	
	<img src="../up/room/<?php echo $row ['pic']; ?>"  style="widht:<?php echo $row ['width']; ?>px;height:<?php echo $row ['height']; ?>px;position:absolute;top:<?php echo $row ['atas']; ?>px;left:<?php echo $row ['kiri']; ?>px;" />
	
	<?php 
	endwhile;
	?>
	
		<img id="myImage" src="../up/room/<?php echo $rs ['pic']; ?>"  style="widht:<?php echo $rs ['width']; ?>px;height:<?php echo $rs ['height']; ?>px"/>
	
	
	
	<br/>
	<br/>

</body>	



<script>
function showCoords(event) {
    var x = event.clientX;
    var y = event.clientY;
    var coords = "X coords: " + x + ", Y coords: " + y;
    var a = x;
	var b = y;
	document.getElementById("demo").innerHTML = coords;
	document.getElementById("left").value = a;
	document.getElementById("atas").value = b;
}
</script>
	  
</html>
