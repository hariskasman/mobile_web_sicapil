<?php 
ini_set('display_errors',0);
$dt = date("d/m/Y");

$q = "SELECT * FROM setting where id='1'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);

$qa = "SELECT * FROM cashflow WHERE codx='$_GET[u]'";
$ra = mysqli_query($link,$qa);	
$rsa = mysqli_fetch_array($ra);

$dpma = $link->query("SELECT SUM(money) as 'total' FROM cashflow WHERE username='" .$_SESSION['log1']. "' AND trx='in' AND mt='" .$mt. "' AND yr='" .$yr. "'");
$ryma = $dpma->fetch_assoc();
$tmoney_all = $ryma ['total'];

//Pemasukan Semua
$dpla = $link->query("SELECT SUM(money) as 'total' FROM cashflow WHERE username='" .$_SESSION['log1']. "' AND trx='in'");
$ryua = $dpla->fetch_assoc();
$tmoney_inall = $ryua ['total'];

//Pengeluaran Semua
$dplb = $link->query("SELECT SUM(money) as 'total' FROM cashflow WHERE username='" .$_SESSION['log1']. "' AND trx='out'");
$ryub = $dplb->fetch_assoc();
$tmoney_outall = $ryub ['total'];

// Balance Pengeluaran Semua
$all_balance = $tmoney_inall - $tmoney_outall;

$dpz = $link->query("SELECT SUM(money) as 'total' FROM cashflow WHERE username='" .$_SESSION['log1']. "' AND trx='in' AND dt='" .$dt. "'");
$ryz = $dpz->fetch_assoc();
$tmoney_day = $ryz ['total'];

$mt = date("m");
$yr = date("Y");
$dpm = $link->query("SELECT SUM(money) as 'total' FROM cashflow WHERE username='" .$_SESSION['log1']. "' AND trx='in' AND mt='" .$mt. "' AND yr='" .$yr. "'");
$rym = $dpm->fetch_assoc();
$tmoney_month = $rym ['total'];

$dpe = $link->query("SELECT SUM(money) as 'total' FROM cashflow WHERE username='" .$_SESSION['log1']. "' AND trx='out' AND dt='" .$dt. "'");
$rye = $dpe->fetch_assoc();
$emoney_day = $rye ['total'];

$dpx = $link->query("SELECT SUM(money) as 'total' FROM cashflow WHERE username='" .$_SESSION['log1']. "' AND trx='out' AND mt='" .$mt. "' AND yr='" .$yr. "'");
$ryx = $dpx->fetch_assoc();
$emoney_month = $ryx ['total'];

$dplog = $link->query("SELECT SUM(menit) as 'total' FROM cashflow WHERE username='" .$_SESSION['log1']. "' AND dt='" .$dt. "'");
$rylog = $dplog->fetch_assoc();
$smlog = $rylog ['total'];
$bl = $smlog - 1440; 
$tl = $smlog / 60;

$dploga = $link->query("SELECT SUM(menit) as 'total' FROM cashflow WHERE username='" .$_SESSION['log1']. "'");
$ryloga = $dploga->fetch_assoc();
$smloga = $ryloga ['total'];
$tla = $smloga / 60;

$day_balance = $tmoney_day - $emoney_day;
$month_balance = $tmoney_month - $emoney_month;


?>