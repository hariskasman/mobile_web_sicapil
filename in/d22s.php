<?php 
ini_set('display_errors',0);
$dt = date("d/m/Y");
$mt = date("m");

$q = "SELECT * FROM setting where id='1'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);

$qa = "SELECT * FROM pengguna WHERE codx='$_GET[u]'";
$ra = mysqli_query ($link,$qa);
$rsa = mysqli_fetch_array ($ra);
$nm = $rsa ['username'];

$qb = "SELECT * FROM log_note WHERE codx='$_GET[u]'";
$rb = mysqli_query ($link,$qb);
$rsb = mysqli_fetch_array ($rb);

$dplog = $link->query("SELECT SUM(menit) as 'total' FROM log_book WHERE username='" .$nm. "' AND tgl='" .$dt. "'");
$rylog = $dplog->fetch_assoc();
$smlog = $rylog ['total'];
$tl = $smlog / 60;

$dploga = $link->query("SELECT SUM(menit) as 'total' FROM log_book WHERE username='" .$nm. "'");
$ryloga = $dploga->fetch_assoc();
$smloga = $ryloga ['total'];
$tla = $smloga / 60;

?>