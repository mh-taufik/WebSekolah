<?php 
include 'koneksi_db.php';
if($_POST['upload']){
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $umur = $_POST['umur'];
  $namaFile = $_FILES['file']['name'];
  $file_tmp = $_FILES['file']['tmp_name'];

  move_uploaded_file($file_tmp, "./images/$namaFile");
  $query = mysqli_query($conn,"INSERT INTO mahasiswa VALUES('$nim', '$nama', '$umur', '$namaFile')");
  if($query){
    echo 'FILE BERHASIL DI UPLOAD';
  }else{
    echo 'GAGAL MENGUPLOAD GAMBAR';
  }
}
header("location:index.php?content=dataSiswa.php");
?>