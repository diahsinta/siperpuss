<?php
include '../koneksi.php';
session_start();

$id_anggota= $_GET["id_anggota"];

$query = mysqli_query($koneksi,"DELETE FROM anggota where id_anggota=$id_anggota");

// var_dump($query);

if($query>0)
{
    echo
    "
    <script>
    alert('data berhasil dihapus');
    document.location.href ='index.php';
    </script>
    ";
}
?>