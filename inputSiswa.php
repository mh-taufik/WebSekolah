<div class="container text-white">
<h1>Input Siswa Baru<br/></h1>
	<form action="index.php?content=post.php"  method="post" enctype="multipart/form-data">
    <center>
        <div class="row">
			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1">Nim</span>
				<input type="text" class="form-control" placeholder="" aria-label="nim" aria-describedby="basic-addon1" name="nim">
			</div>
        </div>
		<div class="row">
			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1">Nama</span>
				<input type="text" class="form-control" placeholder="" aria-label="nama" aria-describedby="basic-addon1" name="nama">
			</div>
		</div>
		<div class="row">
			<div class="input-group mb-3">
				<span class="input-group-text" id="basic-addon1">Umur</span>
				<input type="number" class="form-control" placeholder="" aria-label="umur" aria-describedby="basic-addon1" name="umur">
			</div>
		</div>
		<br>
        <div class="row pt-2">
			<div class="input-group">
				<input type="file" name="file" class="btn btn-secondary">
				<input type="submit" name="upload" value="UPLOAD" class="btn btn-dark font-weight-bold">
			</div>
		</div>		
      </center>
</div>