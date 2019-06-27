  <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">produk</li>
      </ol>
  </section>
  <section class="content">
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Produk</h3>
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
	<form class="form-horizontal" action="../admin/module/produk/aksi_simpan.php" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Id Kategori Produk</label>
				<div class="col-sm-10">
					<select class="form-control" name="id_kategori_produk">
						<?php
							include "../lib/koneksi.php";
							$kueriKategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
							while($kat = mysqli_fetch_array($kueriKategori)){
						?>
							<option value="<?php echo $kat['id_kategori'];?>"><?php echo $kat['nama_kategori'];?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class ="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Merek</label>
				<div class="col-sm-10">
					<select class="form-control" name="id_merek">
						<?php
							$kueriMerek = mysqli_query($koneksi, "SELECT * FROM tbl_merek");
							while ($mer = mysqli_fetch_array($kueriMerek)) {
						?>
							<option value="<?php echo $mer['id_merek'];?>"><?php echo $mer['nama_merek'];?></option>
						<?php } ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label for="namaProduk" class="col-sm-2 control-label">Nama Produk</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="namaProduk" name="nama_produk" placeholder="Nama Produk">
				</div>
			</div>
						<div class="form-group">
				<label for="deskripsiProduk" class="col-sm-2 control-label">Deskripsi Produk</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="deskripsiProduk" name="deskripsi" placeholder="Deskripsi Produk">
				</div>
			</div>
			<div class="form-group">
				<label for="hargaProduk" class="col-sm-2 control-label">Harga Produk</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="hargaProduk" name="harga" placeholder="harga Produk">
				</div>
			</div>
			<div class="form-group">
				<label for="gambar" class="col-sm-2 control-label">Gambar</label>
				<div class="col-sm-10">
					<input type="file" id="gambar" name="gambar">
				</div>
			</div>

			<div class="form-group">
				<label for="slide" class="col-sm-2 control-label">Slide</label>
				<div class="col-sm-10">
					<div class="radio">
							<input type="radio" name="slide" value="Y">Ya<br>
							<input type="radio" name="slide" value="N">Tidak
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="rekomendasi" class="col-sm-2 control-label">Produk Rekomendasi</label>
				<div class="col-sm-10">
					<div class="radio">
						
							<input type="radio" name="rekomendasi" value="Y">Ya<br>
							<input type="radio" name="rekomendasi" value="N">Tidak
					</div>
				</div>
			</div>
	</div><!-- box body -->
		<div class="box-footer">
			<button type="submit" class="btn btn-primary pull-right">Simpan</button>
		</div><!-- box footer -->
	</form>
</div>
</div>
</div>
</div>
</section>