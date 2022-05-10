<?php
include "koneksi_db.php";
require "libs/fpdf/fpdf.php";

class PDF extends FPDF{
	// Page header
	function Header(){
	    // Logo
	    $this->Image('./images/logo.png',10,-1,20);
	    $this->SetFont('Arial','B',13);
	    // Move to the right
	    $this->Cell(80);
	    // Title
	    $this->Cell(80,10,'Data Siswa',1,1,'C');
	    // Line break
	    $this->Ln(20);
	}
	 
	// Page footer
	function Footer(){
	    // Position at 1.5 cm from bottom
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Page number
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}	


 
$display_heading = array('nim'=>'NIM', 'nama'=> 'Nama', 'umur'=> 'Umur');
 
$result = mysqli_query($conn, "SELECT nim, nama, umur FROM mahasiswa") or die("database error:". mysqli_error($conn));
$header = mysqli_query($conn, "SHOW columns FROM mahasiswa LIKE '%m%'");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','',12); 

foreach($header as $heading) {
	$pdf->Cell(60,12,$display_heading[$heading['Field']],1,0,'C');
	}
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(60,12,$column,1,'','T');
}

$pdf->Output();