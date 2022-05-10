<?php 
include 'koneksi_db.php';
?>
<center>
<div class="container">
<h2>Data Siswa</h2>
<div class="text-white">
	<form action="index.php?content=dataSiswa.php" method="get">
        <label>Cari mahasiswa</label>
        <input type="text" name="key">
        <input type="submit" name="cari" class="btn btn-secondary">
	</form>
	<?php 
		if(isset($_GET['key'])){
			$key = $_GET['key'];
			echo "<b>Hasil pencarian : ".$key."</b>";
		}
	?>
</div>
<br>
<div>
	<a href="convertExcel.php">EXPORT KE EXCEL</a>
</div>
<br>
<div>
	<a href="convertPdf.php">EXPORT KE PDF</a>
</div>
<br>
<table border="1" cellpadding="4" class="table text-white">
	<thead>
	<tr class="tr bg-dark">
		<th>NIM</th>
		<th>Nama</th>
		<th>Umur</th>
		<th>Detail Siswa</th>
		<th>Update Siswa</th>
		<th>Delete Siswa</th>
		<th>Foto</th>
	</tr>
	</thead>
	<tbody>
	<?php
        include "koneksi_db.php";

        if(isset($_GET['key'])){
            $key = $_GET['key'];
            $query = mysqli_query($conn,"select * from mahasiswa where nama like '%".$key."%'");
        }else{
            $query = mysqli_query($conn,"select * from mahasiswa");
        }
				
        while($row = mysqli_fetch_array($query)){
        ?>
	<tr>
		<td><?php echo $row['nim']?></td>
		<td><?php echo $row['nama']?></td>
		<td><?php echo $row['umur']?></td>
		<td><a href="index.php?content=render.php&nim=<?php echo $row['nim']?>" class="btn btn-secondary">View Detail's</a></td>
		<td><a href="index.php?content=edit.php&nim=<?php echo $row['nim']?>&oldFoto=<?php echo $row['foto']?>" class="btn btn-secondary">Update</a></td>
		<td><a href="index.php?content=delete.php&nim=<?php echo $row['nim']?>&foto=<?php echo $row['foto']?>" class="btn btn-danger">Delete</a></td>
		<td>
			<img src="./images/<?php echo $row['foto']?>"  width="85" height="125">
		</td>
	</tr>
<?php 
}
mysqli_close($conn);
?>
</tbody>
</table>
</div>