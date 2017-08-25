<?php 
include ("../sec/22.php"); 
include("d22s.php");
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
<h4><b>Log Book</b></h4>
<h4>Report by Day</h4>
<h5><?php echo $smlog; ?> Minute </h5>
<img src="<?php echo $rsa['pic']; ?>" alt="isesware" width="150px" height="200px">
<h5><u>Nama : <b><?php echo $rsa['fullname']; ?></b></u></h5><br/>
</div>
<br/>
<div align="center">
<table >
			<tr >
				<th>Date</th>
				<th>Activity</th>
				<th>Minute</th>
			</tr>
		<?php
		$res = $link->query("SELECT * FROM log_book WHERE username='" .$nm. "' AND tgl='" .$dt. "'");
		while ($rw = $res->fetch_assoc()):
		?>
			<tr >
				<td><?php echo $rw['tgl'] ?></td>
				<td><?php echo $rw['kerja'] ?></td>
				<td><?php echo $rw['menit'] ?></td>
			</tr>
		<?php
		endwhile;
		?>				    
		</table>
</div>
</div>


</body>
</html>
