<?php
include("config.php");

$qo = "SELECT * FROM setting WHERE id='1'";
$rq = mysqli_query($link,$qo);
$ro = mysqli_fetch_array($rq); 
$home = $ro['home'];

?>

<head>
	<META HTTP-EQUIV="REFRESH" 
	CONTENT="0; URL='<?php echo $home ?>'">
</head>