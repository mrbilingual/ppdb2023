<?php

    $host="localhost";
    $user="root";
    $pass="";
    $database="ppdb2023";

    $koneksi=mysqli_connect($host, $user, $pass);
    if ($koneksi){
        $buka=mysqli_select_db($koneksi, $database);
        //echo "database dapat terhubung";
        if (!$buka){
            echo "database tidak dapat terhubung";
        }
    } else {
        echo "MySql tidak dapat terhubung";
    }

 ?>