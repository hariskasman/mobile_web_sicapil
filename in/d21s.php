<?php 
ini_set('display_errors',0);
$dt = date("d/m/Y");

$q = "SELECT * FROM setting where id='1'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);

$qa = "SELECT * FROM log_book WHERE codx='$_GET[u]'";
$ra = mysqli_query($link,$qa);	
$rsa = mysqli_fetch_array($ra);

$qb = "SELECT * FROM pengguna WHERE username='" .$_SESSION['log1']. "'";
$rb = mysqli_query ($link,$qb);
$rsb = mysqli_fetch_array ($rb);

$qc = "SELECT * FROM log_book WHERE username='" .$_SESSION['log1']. "'";
$rc = mysqli_query ($link,$qc);
$rsc = mysqli_fetch_array ($rc);

$qd = "SELECT * FROM log_note WHERE codx='$_GET[u]'";
$rd = mysqli_query ($link,$qd);
$rsd = mysqli_fetch_array ($rd);

$dplog = $link->query("SELECT SUM(menit) as 'total' FROM log_book WHERE username='" .$_SESSION['log1']. "' AND tgl='" .$dt. "'");
$rylog = $dplog->fetch_assoc();
$smlog = $rylog ['total'];
$bl = $smlog - 1440; 
$tl = $smlog / 60;

$dploga = $link->query("SELECT SUM(menit) as 'total' FROM log_book WHERE username='" .$_SESSION['log1']. "'");
$ryloga = $dploga->fetch_assoc();
$smloga = $ryloga ['total'];
$tla = $smloga / 60;
?>