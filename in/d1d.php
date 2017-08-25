<head>
	<META HTTP-EQUIV="REFRESH" 
	CONTENT="0; URL='d1.php'">
</head>

<?php
include "../config.php";
$query = "DELETE FROM post WHERE codx = '$_GET[u]'";
if( $link->query($query) ) {
}else{
echo "Data tidak terhapus";
}

$link->close();
?>