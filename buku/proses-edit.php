<?php
// setiap form ada prosses
//query dibawah pahami dan query update hafali
//aksi dari action ada di form prosess
include '../koneksi.php';
if(isset($_POST['btnPinjam']))
{
    $b=$_POST["id_buku"];
    $judul=$_POST['judul'];
    $penerbit=$_POST['penerbit'];
    $pengarang=$_POST['pengarang'];
    $ringkasan=$_POST['ringkasan'];
    $cover=$_POST['cover'];
    $stok=$_POST['stok'];
    $id_kategori=$_POST["id_kategori"];

    $query = mysqli_query($koneksi, "UPDATE buku SET judul='$judul', penerbit='$penerbit',pengarang='$pengarang',ringkasan='$ringkasan',cover='$cover'
    ,stok='$stok', id_kategori='$id_kategori' where id_buku=$b");
    // $res=mysqli_query($koneksi,$sql);
    // $count=mysqli_affected_rows($koneksi);
    
    if($query>0)
{
    echo
    "
    <script>
    alert('data berhasil di edit horeee!');
    document.location.href ='index.php';
    </script>
    ";
}
else
{
    echo
    "
    <script>
    alert('data berhasil di edit horeee!');
    document.location.href ='index.php';
    </script>
    ";
}

}

?>


