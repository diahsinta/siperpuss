<?php
include '../koneksi.php';
session_start();

$id_buku= $_GET["id_buku"];

$query = mysqli_query($koneksi,"DELETE FROM buku where id_buku=$id_buku");

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