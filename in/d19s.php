<?php 
ini_set('display_errors',0);
$dt = date("d/m/Y");

$q = "SELECT * FROM setting where id='1'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);

$qb = "SELECT * FROM tran WHERE stat='hold' AND trx='$_GET[u]'";
$rb = mysqli_query ($link,$qb);
$rsb = mysqli_fetch_array ($rb);

// menghitung total hold saat mau payment
$dpg = $link->query("SELECT SUM(total) as 'total' FROM sales WHERE cashier='" .$_SESSION['log1']. "' AND sto='" .$_SESSION['stores']. "' AND stat='hold' AND trx='$_GET[u]'");
$ryg = $dpg->fetch_assoc();
$total_hold = $ryg ['total'];

// menghitung net profit hold
$dph = $link->query("SELECT SUM(net_profit) as 'total' FROM sales WHERE cashier='" .$_SESSION['log1']. "' AND sto='" .$_SESSION['stores']. "' AND stat='hold' AND trx='$_GET[u]'");
$ryh = $dph->fetch_assoc();
$total_netprofit_hold = $ryh ['total'];

?>