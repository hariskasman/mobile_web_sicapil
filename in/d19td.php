<head>
	<META HTTP-EQUIV="REFRESH" 
	CONTENT="0; URL='d19.php'">
</head>

<?php
include "../config.php";

$q = "SELECT * FROM sales WHERE id ='$_GET[u]'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);
$nilai = $rs['qty'];
$kode = $rs['sku'];

$qa = "SELECT * FROM product WHERE serial='$kode'";
$ra = mysqli_query ($link,$qa);
$ras = mysqli_fetch_array ($ra);
$pnilai = $ras['qty'];

$upd = $nilai + $pnilai;

$query = "UPDATE product SET qty = '$upd' WHERE serial='$kode'";
if( $link->query($query) ) {
echo "Sukses";
}else{
echo "Data tidak tersimpan";
}


//$_GET[id] untuk mengambil nilai dari address bar ?id=nilainya 
$query = "DELETE FROM sales WHERE id = '$_GET[u]'";
if( $link->query($query) ) {
}else{
echo "Data tidak terhapus";
}

$link->close();

?>