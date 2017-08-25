<?php 
ini_set('display_errors',0);
$dt = date("d/m/Y");

$q = "SELECT * FROM setting where id='1'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);

$qa = "SELECT * FROM menum WHERE codx='$_GET[u]'";
$ra = mysqli_query($link,$qa);	
$rsa = mysqli_fetch_array($ra);

$qb = "SELECT * FROM ico WHERE codx='$_GET[u]'";
$rb = mysqli_query($link,$qb);	
$rsb = mysqli_fetch_array($rb);

$qc = "SELECT * FROM menu WHERE codx='$_GET[u]'";
$rc = mysqli_query($link,$qc);	
$rsc = mysqli_fetch_array($rc);

?>