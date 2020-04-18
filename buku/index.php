<?php 
include '../koneksi.php';

$sql = "SELECT * FROM buku ORDER BY judul";

$res = mysqli_query($koneksi, $sql);

$buku = array();

while ($data = mysqli_fetch_assoc($res)) {
  $buku[] = $data;
}
?>
<?php 
include '../aset/header.php';
?>
<div class="container">
  <div class="row mt-4">
    <div class="col-md">
      <div class="card">
          <div class="card-header">
          <h2 class="card-title"><i class="fas fa-book"></i> Data Buku</h2>
          <a href="tambah_buku.php">Tambah Data Buku</a>
          <a href="prosestambah.php?id_buku=<?=$b['id_buku'];?>" class="badge badge-success
          ">Proses Tambah</a>
        </div>
        <div class="card-body">
          <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Judul</th>
              <th scope="col">Pengarang</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <?php  
            $no = 1;
            foreach ($buku as $b) {?>
            <tr>
              <th scope="row"><?=$no?></th>
              <td><?=$b['judul']?></td>
              <td><?=$b['pengarang']?></td>
              <td>
            
            <a href="detail_buku.php?id_buku=<?= $b['id_buku'];?>" class="badge badge-success">Detail</a>
            <a href="edit_buku.php?id_buku=<?= $b['id_buku'];?>" class="badge badge-warning">Edit</a>
            <a href="hapus_buku.php?id_buku=<?= $b['id_buku'];?>" class="badge badge-danger">Hapus</a>
              </td>
            </tr>
            <?php
              $no++;
            }
          ?>
          </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>


<?php 
include '../aset/footer.php';
?>