<?php
	session_start();
	
	if (!isset($_SESSION['login'])) {
		header("location:login.php");
	}else{
		if($_SESSION['login']==false){
			header("location:login.php");
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body class="d-flex flex-column h-100">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<header class="border-bottom p-2 bg-secondary justify-content-center">
			<div class="theme-bg-shapes-right"></div>
			<div class="theme-bg-shapes-left"></div>
		<center>
		<a href="template.php" class="align-items-center mb-3 mb-md-0 me-md-auto text-light text-decoration-none">
			<span class="fs-4">Home Schooling</span>
		</a>
		<div class="align-content-center">
			<ul class="nav nav-pills">
			<li class="nav-item">
				<a href="template.php?content=home.php" class="nav-link m-2"> HOME </a>
			</li>
			<li class="nav-item">
				<a href="template.php?content=berita.php" class="nav-link m-2"> BERITA </a>
			</li>
			<li class="nav-item">
				<a href="template.php?content=dataSiswa.php" class="nav-link m-2"> DATA SISWA </a>
			</li>
			<li class="nav-item">
					<a href="template.php?content=cariData.php" class="nav-link m-2"> CARI SISWA </a>
			</li>
			<li class="nav-item">
				<a href="template.php?content=inputSiswa.php" class="nav-link m-2"> INPUT SISWA </a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link m-2"> LOG OUT </a>
			</li>
			</ul>
		</div>
	</header>

	<main>
		<div class="container align-item-center">
			<?php
				if(isset($_GET["content"])){
					$file = $_GET["content"];
					include $file;
				}else if(isset($_GET["cari"])){
					include 'cariData.php';
				}else if(isset($_GET["nim"], $_GET["content"])){
					$file = $_GET["content"];
					include $file;
				}else{
					echo "INI HOME";
				}
			?>
		</div>
	</main>
		
	<footer class="fixed-bottom mt-auto py-3 bg-light">
		<div class="container">	
			<span class="text-muted">© 2022 by Muhammad Taufik</span>
		</div>
	</footer>
</body>
</html>