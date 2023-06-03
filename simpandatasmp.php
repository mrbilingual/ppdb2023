<?php
    include "koneksi.php";
    $id = $_POST['id'];
    $namalengkap = $_POST['namalengkap'];
    $tanggallahir = $_POST['tanggallahir'];
    $alamatlengkap = $_POST['alamatlengkap'];
    $asalsekolah= $_POST['asalsekolah'];
    $NISN = $_POST['NISN'];
    $NIK = $_POST['NIK'];

    $simpan = mysqli_query($koneksi, "insert into tblsmp values ('$id','$namalengkap', '$tanggallahir', '$alamatlengkap', '$asalsekolah', '$NISN', 
    '$NIK')");

if ($simpan){
    echo"<script> alert ('Data Berhasil Disimpan')</script>";
    header("refresh:0;ppdbsmp2023.php");
}else{
    echo"<script> alert ('Data Tidak Berhasil Disimpan')</script>";
    header("refresh:0;ppdbsmp2023.php");
}



?>