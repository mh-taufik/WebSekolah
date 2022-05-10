<?php
    if(isset($_GET['nim'])){
        $nim = $_GET['nim'];
    }

    include "koneksi_db.php";
    $query    = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
    $result   = mysqli_fetch_array($query);
?>
<html>
<head>
</head>
<body>
    <h2>Detail Data <?php echo $result['nama']?></h2>
    <img src="./images/<?php echo $result['foto']?>" width="150" height="250"/>
    <center>
    <table border="1" cellpadding="0" >
        <tr bgcolor="silver">
            <th>NIM</th>
            <th>Nama</th>
            <th>Umur</th>
        </tr>
        <tr>
            <td><?php echo $result['nim']?></td>
            <td><?php echo $result['nama']?></td>
            <td><?php echo $result['umur']?></td>
        </tr>
    </table>
    </center>
</body>
</html>