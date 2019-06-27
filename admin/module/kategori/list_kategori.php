  <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">kategori</li>
      </ol>
  </section>
  <section class="content">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Kategori</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
<table class="table table-hover">
  <tr>
    <th>id kategori</th>
    <th>Kategori</th>
    <th style="width: 110px">Aksi</th>
  </tr>
      <?php
      include "../lib/config.php";
      include "../lib/koneksi.php";
      $kueriKategori = mysqli_query($koneksi,"SELECT * FROM tbl_kategori");
      while ($kat=mysqli_fetch_array($kueriKategori)) {
      ?>
  <tr>
    <td><?php echo $kat['id_kategori']; ?></td>
    <td><?php echo $kat['nama_kategori']; ?></td>
                <td>
                  <div class="btn-group">
                    <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_kategori&id_kategori=<?php echo $kat['id_kategori']; ?>" class="btn btn-warning"><i class='fa fa-pencil'></i></button></a>
                    <a href="<?php echo $admin_url; ?>module/kategori/aksi_hapus.php?id_kategori=<?php echo $kat['id_kategori']; ?>" onClick="return confirm('Anda yakin ingin menghapus kategori ini?')" class="btn btn-danger"><i class='fa fa-power-off'></i></button></a>
                  </div>
                </td>
  </tr>
 <?php }     ?>

</table>
<div class="box-footer">
    <a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_kategori"><button class="btn btn-primary">Tambah Kategori</button></a>
  </div>
</div>
</div></div>
</div>
</div>
</section>