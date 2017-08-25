<?php 
ini_set('display_errors',0);
$dt = date("d/m/Y");

$q = "SELECT * FROM setting where id='1'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);

$qa = "SELECT * FROM product WHERE codx='$_GET[u]'";
$ra = mysqli_query($link,$qa);	
$rsa = mysqli_fetch_array($ra);

$qt = "SELECT * FROM tran ORDER BY id DESC LIMIT 1";
$rt = mysqli_query ($link,$qt);
$rst = mysqli_fetch_array ($rt);

$trx = $rst['id'] + 1;

// menghitung total billing saat sales baru mau menjual
$dpc = $link->query("SELECT SUM(total) as 'total' FROM sales WHERE cashier='" .$_SESSION['log1']. "' AND sto='" .$_SESSION['stores']. "' AND stat='open' AND trx='$trx'");
$ryc = $dpc->fetch_assoc();
$total_bill = $ryc ['total'];

// menghitung net profit
$dpd = $link->query("SELECT SUM(net_profit) as 'total' FROM sales WHERE cashier='" .$_SESSION['log1']. "' AND sto='" .$_SESSION['stores']. "' AND stat='open' AND trx='$trx'");
$ryd = $dpd->fetch_assoc();
$total_netprofit = $ryd ['total'];

?>