<!DOCTYPE html>
<html>
<head>
	<title>Murid SMP PPDB 2023</title>
	<script language="javascript" type="text/javascript">window.history.forward();</script>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="bootstrap-4.0.0-dist/js/bootstrap.bundle.min.js"></script>

	<style>
	body {
            background: #d4d4d4;
        }
	</style>

</head>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="color:white;">

	<a class="mb-0 h5"><b>AKSES DATA PPDB 2023 SMP</b></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
		aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav mr-auto w-100 justify-content-end"> 
				<form method="POST" action="aksesdatasmplogout.php">
					<input type="submit" name="submit" value="Logout">
				</form> 
		</div>
	</div>
	</nav>
	<br>
	
	<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Murid SMP PPDB 2023</h4>
                  <p class="card-description">
                  <a class="btn btn-success" href="exportsmp.php">.xls</a>   
                  </p>
	<div class="table-responsive">
	<table class="table table-light">
		<tr>
			
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>NISN</th>
            <th>NIK</th>
		</tr>
	
        <?php
        include "koneksi.php";
		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from tblsmp");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>

		<tr>
		
	    <td><?php echo $d['id']; ?></td>
        <td><?php echo $d['namalengkap']; ?></td>
        <td><?php echo $d['tanggallahir']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['asalsekolah']; ?></td>
        <td><?php echo $d['NISN']; ?></td>
        <td><?php echo $d['NIK']; } ?></td>
		</tr>
		<?php 
		
		?>
	</table>
		</div>
</body>
</html>