  <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">merek</li>
      </ol>
  </section>
  <section class="content">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Merek</h3>
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
    <th>id Merek</th>
    <th>Merek</th>
    <th style="width: 110px">Aksi</th>
  </tr>
      <?php
      include "../lib/config.php";
      include "../lib/koneksi.php";
      $kueriMerek = mysqli_query($koneksi,"SELECT * FROM tbl_merek");
      while ($mer=mysqli_fetch_array($kueriMerek)) {
      ?>
  <tr>
    <td><?php echo $mer['id_merek']; ?></td>
    <td><?php echo $mer['nama_merek']; ?></td>
                <td>
                  <div class="btn-group">
                    <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_merek&id_merek=<?php echo $mer['id_merek']; ?>" class="btn btn-warning"><i class='fa fa-pencil'></i></button></a>
                    <a href="<?php echo $admin_url; ?>module/kategori/aksi_hapus.php?id_merek=<?php echo $mer['id_merek']; ?>" onClick="return confirm('Anda yakin ingin menghapus kategori ini?')" class="btn btn-danger"><i class='fa fa-power-off'></i></button></a>
                  </div>
                </td>
  </tr>
 <?php }     ?>

</table>
<div class="box-footer">
    <a href="<?php echo $base_url; ?>admin/adminweb.php?module=tambah_merek"><button class="btn btn-primary">Tambah Merek</button></a>
  </div>
</div>
</div></div>
</div>
</div>
</section>