<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_perpuss");
if(mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>