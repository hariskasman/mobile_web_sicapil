<?php 
ini_set('display_errors',0);
$dt = date("d/m/Y");

$q = "SELECT * FROM setting where id='1'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);

$qa = "SELECT * FROM sec WHERE id='1'";
$ra = mysqli_query($link,$qa);	
$rsa = mysqli_fetch_array($ra);
?>