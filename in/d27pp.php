<?php 
include ("../sec/27.php"); 
include("d27s.php");
?>

<!DOCTYPE html>
<?php include ("../lib/liba.php"); ?>

<link href="../public/css/harisk.css" rel="stylesheet" />


<style>
p {
	letter-spacing: 1px; 
	line-height:3px;
	font-size:12px;
}
abc {
	font-size:90%;
}
</style>

<body> 
<br/>

<div  class="container">
<div align="center">
<br/>
<h4><b>Room <?php echo $_GET[u]; ?></b></h4>
<h4>All Item</h4>
</div>
<br/>
<div align="center">
<table >
			<tr >
				<th>Image</th>
				<th>Item</th>
				<th>Satuan</th>
				<th>Room</th>
				<th>Location</th>
				<th>Qty</th>
				<th>Terima Dari</th>
				<th>Taruh</th>
				<th>Tanggal</th>
			</tr>
		<?php
		$res = $link->query("SELECT * FROM inventory WHERE room='$_GET[u]'");
		while ($rw = $res->fetch_assoc()):
		?>
			<tr >
				<td><img src="<?php echo $rw ['ipic']; ?>" alt="image" width="100px" height="100px"></td>
				<td><?php echo $rw['iname'] ?></td>
				<td><?php echo $rw['satuan'] ?></td>
				<td><?php echo $rw['room'] ?></td>
				<td><?php echo $rw['detail_room'] ?></td>
				<td><?php echo $rw['qty'] ?></td>
				<td><?php echo $rw['terima'] ?></td>
				<td><?php echo $rw['taruh'] ?></td>
				<td><?php echo $rw['tgl'] ?></td>
			</tr>
		<?php
		endwhile;
		?>				    
		</table>
</div>
</div>


</body>
</html>
