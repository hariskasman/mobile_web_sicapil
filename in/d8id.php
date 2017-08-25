<head>
	<META HTTP-EQUIV="REFRESH" 
	CONTENT="0; URL='d8i.php'">
</head>

<?php
include "../config.php";
$query = "DELETE FROM ico WHERE codx = '$_GET[u]'";
if( $link->query($query) ) {
}else{
echo "Data tidak terhapus";
}

$link->close();
?>