<?php 
include 'koneksi_db.php';

if(isset($_POST['update'])){
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $umur = $_POST['umur'];
  $oldFoto = $_POST['oldFoto'];
  $namaFile = $_FILES['newFoto']['name'];
  $file_tmp = $_FILES['newFoto']['tmp_name'];

  if(!empty($namaFile)){
    unlink("./images/".$oldFoto);
    move_uploaded_file($file_tmp, "./images/$namaFile");
    mysqli_query($conn,"update mahasiswa set nama='$nama', umur='$umur', foto='$namaFile' where NIM='$nim'");
  }else{
    mysqli_query($conn,"update mahasiswa set nama='$nama', umur='$umur' where NIM='$nim'");
  }
}


header("location:index.php?content=dataSiswa.php");
?>