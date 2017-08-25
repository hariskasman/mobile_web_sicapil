<?php include ("../config.php"); ?>

<table border="5px" >
			<tr >
				<th>Nik</th>
				<th>Nama</th>
				<th>Ktp</th>
				<th>Lahir</th>
				<th>Status</th>
				<th>Alamat</th>
				<th>Agama</th>
				<th>Ijazah</th>
				<th>Hp</th>
				<th>Telp</th>
				<th>Keluarga</th>
				<th>Nama Per</th>
				<th>Alamat Per</th>
				<th>Asal Sekolah</th>
				<th>Email</th>
				<th>Wilayah</th>
			</tr>

		<?php
		$res = $link->query("SELECT * FROM form");
		while ($rw = $res->fetch_assoc()):
		?>

			<tr >
				<td><?php echo $rw['nik'] ?></td>
				<td><?php echo $rw['nama'] ?></td>
				<td><?php echo $rw['ktp'] ?></td>
				<td><?php echo $rw['lahir'] ?></td>
				<td><?php echo $rw['status'] ?></td>
				<td><?php echo $rw['alamat'] ?></td>
				<td><?php echo $rw['agama'] ?></td>
				<td><?php echo $rw['ijazah'] ?></td>
				<td><?php echo $rw['hp'] ?></td>
				<td><?php echo $rw['telp'] ?></td>
				<td><?php echo $rw['kel'] ?></td>
				<td><?php echo $rw['nama_per'] ?></td>
				<td><?php echo $rw['alamat_per'] ?></td>
				<td><?php echo $rw['asal_sekolah'] ?></td>
				<td><?php echo $rw['email'] ?></td>
				<td><?php echo $rw['wilayah'] ?></td>
			</tr>
	
		<?php
		endwhile;
		?>				
					
		</tbody>       
		</table>
