<?php
$koneksi = mysqli_connect("localhost", "root","","db_perpuss");

if(isset($_POST['simpan']))
{

    $judul=$_POST['judul'];
    $penerbit=$_POST['penerbit'];
    $pengarang=$_POST['pengarang'];
    $ringkasan=$_POST['ringkasan'];
    $cover=$_POST['cover'];
    $stok=$_POST['stok'];
    $id_kategori=$_POST['id_kategori'];

    $sql = mysqli_query($koneksi, "INSERT INTO buku (judul, penerbit, pengarang, ringkasan, cover,stok,id_kategori)
        VALUES ('$judul','$penerbit', '$pengarang', '$ringkasan', '$cover', '$stok', '$id_kategori')");

        $count = mysqli_affected_rows($koneksi);
        
        if($count>0){
        echo "
            <script>
            alert('Data Berhasil Di tambah !!!');
            document.location.href='index.php';
            </script>
        ";
    }
        
}
        
?>
