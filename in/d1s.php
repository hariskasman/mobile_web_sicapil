<?php 
ini_set('display_errors',0);
$dt = date("d/m/Y");

$q = "SELECT * FROM setting where id='1'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);

// POST
$qa = "SELECT * FROM post WHERE codx='$_GET[u]'";
$ra = mysqli_query($link,$qa);	
$rsa = mysqli_fetch_array($ra);
$rsac=mysqli_num_rows($ra);

// POST KATEGORI
$qb = "SELECT * FROM post_kat WHERE codx='$_GET[u]'";
$rb = mysqli_query($link,$qb);	
$rsb = mysqli_fetch_array($rb);

// POST KATEGORI VIEW
$qc = "SELECT * FROM post WHERE kat='$_GET[u]'";
$rc = mysqli_query($link,$qc);	
$rsc = mysqli_fetch_array($rc);
?>