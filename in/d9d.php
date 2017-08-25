<head>
	<META HTTP-EQUIV="REFRESH" 
	CONTENT="0; URL='d9.php'">
</head>

<?php
include "../config.php";
$query = "DELETE FROM testi WHERE id = '$_GET[u]'";
if( $link->query($query) ) {
}else{
echo "Data tidak terhapus";
}

$link->close();
?>