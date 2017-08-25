<?php 
ini_set('display_errors',0);
$dt = date("d/m/Y");
$mt = date("m");

$q = "SELECT * FROM setting where id='1'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);

// menghitung net profit sales by day
$dpe = $link->query("SELECT SUM(net_profit) as 'total' FROM tran WHERE stores='" .$_SESSION['stores']. "' AND dt='$dt' AND stat='close'");
$rye = $dpe->fetch_assoc();
$net_day = $rye ['total'];

// menghitung net profit sales by month
$dpf = $link->query("SELECT SUM(net_profit) as 'total' FROM tran WHERE stores='" .$_SESSION['stores']. "' AND mt='$mt' AND stat='close'");
$ryf = $dpf->fetch_assoc();
$net_month = $ryf ['total'];

//Keuntungan Bulanan
$dpb = $link->query("SELECT SUM(total) as 'total' FROM tran WHERE mt='$mt' AND stat='close' AND stores='" .$_SESSION['stores']. "'");
$ryb = $dpb->fetch_assoc();
$total_bulan = $ryb ['total'];

$qa = "SELECT * FROM pengguna WHERE stores='" .$_SESSION['stores']. "'";
$ra = mysqli_query($link,$qa);
$rsa = mysqli_fetch_array($ra);
$kas_awal = $rsa['kas'];

//Keuntungan Harian
$dpa = $link->query("SELECT SUM(total) as 'total' FROM tran WHERE dt='$dt' AND stat='close' AND stores='" .$_SESSION['stores']. "'");
$rya = $dpa->fetch_assoc();
$total_harian = $rya ['total'];

?>