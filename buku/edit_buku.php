<?php
$koneksi = mysqli_connect("localhost","root","","db_perpuss");

include '../aset/header.php';

$b=$_GET['id_buku'];

$query=mysqli_query($koneksi,"SELECT * FROM kategori");
$sql = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku = $b");

?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Buku</h3>
                </div>
                <div class="card-body">
                <!-- //action = ngirim isi form sesuai method post/get -->
                    <form action="proses-edit.php" method="post"> 
                    <table class="table">

                    <?php
                while ($buku = mysqli_fetch_assoc($sql)):
                    ?>
            <tr>
                <input type="hidden" name="id_buku" value="<?php echo $buku['id_buku'];?>">
                <td>Judul</td>
                <td><input type="text" name="judul" value="<?php echo $buku['judul'];?>" required></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" value="<?php echo $buku['penerbit'];?>"required></td>
            </tr>  
               
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang" value="<?php echo $buku['pengarang'];?>" required></td>
            </tr>
            <tr>
                <td>Ringkasan</td>
                <td><textarea name="ringkasan" value="<?php echo $buku['ringkasan'];?>" required></textarea></td>
            </tr>
            <tr>
                <td>cover</td>
                <td><input type="file" name="file" value="<?php echo $buku['file'];?>"required></td>
            </tr>   
            <?php
                endwhile;
                ?>
                        <div class="form-group">
                        <!-- // value = menghasilkan nilai tetap -->
                        <!-- // name = bagian dari method post/get 
                        bli,la kok  di tambah data ku kok nilai yo gdu $_POST(kategori); -->
                        
                            <label for="buku">Kategori</label>
                            <select style="width: 100%" name="id_kategori">
                                <option value="">---Pilih Kategori---</option>
                                <option value=""> Fiksi </option>
                                <option value=""> Non Fiksi </option>
                                <?php

                                    while($kategori = mysqli_fetch_assoc($query)):

                                ?>
                                <option value="<?php echo $kategori['id_kategori'];
                                ?>"><?php echo $kategori['kategori'];?></option>
                                <?php
                                    endwhile;
                                ?>
                                
                            </select>
                        </div>
                        <tr>
                <td>Stok</td>
                <td><input type="number" name="stok" value="<?php echo $buku['stok'];?>" required></td>
            </tr>
                        <div class="form-group">
                            <button type="submit" name="btnPinjam" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../aset/footer.php';
?>
