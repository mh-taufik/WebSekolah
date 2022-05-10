<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Siswa.xls");
	?>
 
	<table>
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Umur</th>
		</tr>
		<?php 
        include "koneksi_db.php";
 
		$data = mysqli_query($conn,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
		?>	
		<tr>
			<td><?php echo $d['nim']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['umur']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>