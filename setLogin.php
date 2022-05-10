<?php
  session_start();
  $_SESSION['login']=false;
  include "koneksi_db.php";
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = MD5($_POST['password']);
    $query = mysqli_query($conn,"select * from admin");
    while ($row = mysqli_fetch_array($query)){
      if(($row['username']==$username)&&($row['password']==$password)){
          $_SESSION['login'] = true;
          echo "berhasil";
      }else{
        echo "gagal";
      }
    }
    header("location:index.php");
  }
?>