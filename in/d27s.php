<?php 
ini_set('display_errors',0);
$dt = date("d/m/Y");

$q = "SELECT * FROM setting where id='1'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);

$qa = "SELECT * FROM ruang WHERE codx='$_GET[u]'";
$ra = mysqli_query($link,$qa);	
$rsa = mysqli_fetch_array($ra);

$qb = "SELECT * FROM ruang WHERE nama='$_GET[u]'";
$rb = mysqli_query($link,$qb);	
$rsb = mysqli_fetch_array($rb);
?>