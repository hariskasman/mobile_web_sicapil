<?php 
ini_set('display_errors',0);
$dt = date("d/m/Y");

$q = "SELECT * FROM setting where id='1'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);

$qa = "SELECT * FROM page where name='$_GET[u]'";
$ra = mysqli_query ($link,$qa);
$rsa = mysqli_fetch_array ($ra);

// Keunggulan perusahaan
$qb = "SELECT * FROM business WHERE id='1'";
$rb = mysqli_query ($link,$qb);
$rsb = mysqli_fetch_array ($rb);

$qc = "SELECT * FROM business WHERE id='2'";
$rc = mysqli_query ($link,$qc);
$rsc = mysqli_fetch_array ($rc);

$qd = "SELECT * FROM business WHERE id='3'";
$rd = mysqli_query ($link,$qd);
$rsd = mysqli_fetch_array ($rd);

$qe = "SELECT * FROM business WHERE id='4'";
$re = mysqli_query ($link,$qe);
$rse = mysqli_fetch_array ($re);

?>