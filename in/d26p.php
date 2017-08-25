<?php 
include ("../sec/26.php"); 
include("d26s.php");
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
<h4><b>Buku Tamu</b></h4>
<h4>Report by All</h4>
</div>
<br/>
<div align="center">
<table >
			<tr >
				<th>Image</th>
				<th>Nama Lengkap</th>
				<th>Jabatan</th>
				<th>Alamat</th>
				<th>Nomor Hp</th>
				<th>Tanggal</th>
				<th>Waktu</th>
				<th>Tujuan</th>
			</tr>
		<?php
		$res = $link->query("SELECT * FROM tamu");
		while ($rw = $res->fetch_assoc()):
		?>
			<tr >
				<td><img src="camfoto/<?php echo $rw ['pic']; ?>" alt="image" width="100px" height="100px"></td>
				<td><?php echo $rw['nama'] ?></td>
				<td><?php echo $rw['jabatan'] ?></td>
				<td><?php echo $rw['alamat'] ?></td>
				<td><?php echo $rw['hp'] ?></td>
				<td><?php echo $rw['tanggal'] ?></td>
				<td><?php echo $rw['waktu'] ?></td>
				<td><?php echo $rw['tujuan'] ?></td>
			</tr>
		<?php
		endwhile;
		?>				    
		</table>
</div>
</div>


</body>
</html>
