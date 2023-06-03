<!DOCTYPE html>
<html>
<head>
	<title>SMK PPDB 2023</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Murid SMK PPDB 2023.xls");
	?>
 
	<center>
		<h1>Data Murid SMK PPDB 2023</h1>
	</center>
 
	<table border="1">
		<tr>
        <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Asal Sekolah</th>
            <th>Jurusan yang Diminati</th>
            <th>NISN</th>
            <th>NIK</th>
		</tr>
		<?php 
        include 'koneksi.php';
 
		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from tblsmk");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
        <td><?php echo $d['id']; ?></td>
        <td><?php echo $d['namalengkap']; ?></td>
        <td><?php echo $d['tanggallahir']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['asalsekolah']; ?></td>
        <td><?php echo $d['jurusanyangdiminati']; ?></td>
        <td><?php echo $d['NISN']; ?></td>
        <td><?php echo $d['NIK']; } ?></td>
		</tr>
		<?php 
		
		?>
	</table>
</body>
</html>