<?php 
include 'koneksi_db.php';
?>
<center>
<div class="container">
<h2>Data Nilai</h2>

<table border="1" cellpadding="4" class="table text-white">
	<thead>
	<tr>
		<th>NIM</th>
		<th>Nama</th>
		<th>Kode Mata Kuliah</th>
		<th>Nama Mata Kuliah</th>
		<th>Index Nilai</th>
	</tr>
	</thead>
	<tbody>
	<?php
        include "koneksi_db.php";

		$query = mysqli_query($conn,"select mahasiswa.nim,mahasiswa.nama,matkul.kode_matkul,matkul.nama_matkul,nilai.nilai from nilai join mahasiswa on nilai.nim=mahasiswa.nim join matkul on nilai.kode_matkul=matkul.kode_matkul order by mahasiswa.nim");
				
        while($row = mysqli_fetch_array($query)){
        ?>
	<tr>
		<td><?php echo $row['nim']?></td>
		<td><?php echo $row['nama']?></td>
		<td><?php echo $row['kode_matkul']?></td>
		<td><?php echo $row['nama_matkul']?></td>
		<td><?php echo $row['nilai']?></td>
	</tr>
<?php 
}
mysqli_close($conn);
?>
</tbody>
</table>
</div>