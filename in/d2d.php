<head>
	<META HTTP-EQUIV="REFRESH" 
	CONTENT="0; URL='d2.php'">
</head>

<?php
include "../config.php";
$query = "DELETE FROM page WHERE codx = '$_GET[u]'";
if( $link->query($query) ) {
}else{
echo "Data tidak terhapus";
}

$link->close();
?>