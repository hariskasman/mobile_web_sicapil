<head>
	<META HTTP-EQUIV="REFRESH" 
	CONTENT="0; URL='d19.php'">
</head>

<?php
include "../config.php";

//$_GET[id] untuk mengambil nilai dari address bar ?id=nilainya 

$query = "DELETE FROM tran WHERE trx = '$_GET[u]'";

if( $link->query($query) ) {

}else{

echo "Data tidak terhapus";

}

$link->close();

?>