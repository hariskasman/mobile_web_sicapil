<head>
	<META HTTP-EQUIV="REFRESH" 
	CONTENT="0; URL='d3.php'">
</head>

<?php
include "../config.php";
$query = "DELETE FROM product WHERE codx = '$_GET[u]'";
if( $link->query($query) ) {
}else{
echo "Data tidak terhapus";
}

$link->close();
?>