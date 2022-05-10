	<br/>
	<div class="py-3">
		<a href="index.php?content=dataSiswa.php">Back to Data Siswa</a>
	</div>
	<br/>
	<h3 class="text-white">EDIT DATA MAHASISWA</h3>

	<?php
	include 'koneksi_db.php';
	$nim = $_GET['nim'];
	$oldFoto = $_GET['oldFoto'];
	$data = mysqli_query($conn,"select * from mahasiswa where nim='$nim'");
	while($d = mysqli_fetch_array($data)){
		
		?>
		<form action="index.php?content=update.php"  method="post" class="text-white" enctype="multipart/form-data">
				<div class="row">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Nama</span>
						<input type="text" class="form-control" value="<?php echo $d['nama']; ?>" aria-label="nama" aria-describedby="basic-addon1" name="nama">
						<input type="hidden" name="nim" value="<?php echo $nim; ?>">
						<input type="hidden" name="oldFoto" value="<?php echo $oldFoto; ?>">
					</div>
				</div>
				<div class="row">
					<div class="input-group mb-3">
						<span class="input-group-text" id="basic-addon1">Umur</span>
						<input type="number" class="form-control" value="<?php echo $d['umur']; ?>" aria-label="umur" aria-describedby="basic-addon1" name="umur">
					</div>
				</div>
				<div class="input-group">
					<input type="file" name="newFoto" class="btn btn-secondary">
					<input type="submit" name="update" value="SIMPAN" class="btn btn-dark">
				</div>
		</form>
		<?php	
			if(isset($_POST['submit'])){
				$nim = $_POST['nim'];
				$nama = $_POST['nama'];
				$umur = $_POST['umur'];
				mysqli_query($conn,"update mahasiswa set nama='$nama', umur='$umur' where NIM='$nim'");
				// header("location:index.php?content=dataSiswa.php");
				echo "berhasil";
			}
		} 
		?>