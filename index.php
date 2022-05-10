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
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Web Sekolah - Home</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- INI BAGIAN HEADER -->
  <header>
    
  </header>

  <!-- INI BAGIAN NAVBAR -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <h1><a href="index.php?content=home.php">Web Sekolah</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="index.php?content=home.php">Home</a></li>
          <li><a class="nav-link" href="index.php?content=berita.php">Berita</a></li>
          <li><a class="nav-link" href="index.php?content=dataSiswa.php">Data Siswa</a></li>
          <li><a class="nav-link" href="index.php?content=dataNilai.php">Data Nilai</a></li>
          <li><a class="nav-link" href="index.php?content=inputSiswa.php">Input Siswa</a></li>
          <li><a class="nav-link" href="logout.php">Log Out</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>

  <?php
    if(isset($_GET["content"])){
      $file = $_GET["content"];
    }else if(isset($_GET["cari"])){
      $file = 'dataSiswa.php';
    }else if(isset($_GET["nim"], $_GET["content"])){
      $file = $_GET["content"];
    }else{
      $file = 'home.php';
    }
  ?>

  <main id="main">
  <section id="hero" class="d-flex flex-column align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
        <div class="<?php echo ($file=="dataSiswa.php" || $file=="dataNilai.php") ? "container md-5 py-5" : "carousel-container pt-5"; ?>">
          <center>
          <?php
          include $file;
			    ?>
          </center>
        </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section>
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer m-3">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Web Sekolah</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Muhammad Taufik</a>
      </div>
    </div>
  </footer>
</body>

</html>