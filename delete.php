<?php 
include 'koneksi_db.php';

$nim = $_GET['nim'];
$foto = "./images/".$_GET['foto'];
unlink($foto);

mysqli_query($conn,"delete from mahasiswa where NIM='$nim'");
header("location:index.php?content=dataSiswa.php");
?>