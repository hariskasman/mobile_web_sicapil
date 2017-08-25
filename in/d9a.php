<head>
	<META HTTP-EQUIV="REFRESH" 
	CONTENT="0; URL='d9.php'">
</head>

<?php
include "../config.php";

$query = "UPDATE testi SET
stat = 'on'

WHERE id = '$_GET[u]'";

if( $link->query($query) ) {
}else{
echo "Data tidak terhapus";
}


$link->close();

?>