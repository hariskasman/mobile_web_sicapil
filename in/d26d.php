<head>
	<META HTTP-EQUIV="REFRESH" 
	CONTENT="0; URL='d26.php'">
</head>

<?php
include "../config.php";
$query = "DELETE FROM tamu WHERE id = '$_GET[u]'";
if( $link->query($query) ) {
}else{
echo "Data tidak terhapus";
}

$link->close();
?>