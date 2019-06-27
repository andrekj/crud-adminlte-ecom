<?php
include "../lib/config.php";
include "../lib/koneksi.php";

$idProduk = $_GET['id_produk'];
$queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk='$idProduk'");

$hasilQuery = mysqli_fetch_array($queryEdit);
$idProduk = $hasilQuery['id_produk'];
$namaProduk = $hasilQuery['nama_produk'];
$deskripsiProduk = $hasilQuery['deskripsi'];
$hargaProduk = $hasilQuery['harga'];

?>

<form class="form-horizontal" action="../admin/module/produk/aksi_edit.php" method="post">
	<input type="hidden" name="id_produk" value="<?php echo $idProduk; ?>">
	<div class="box-body">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control label">Nama Produk</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="namaProduk" name="nama_produk" placeholder="Nama Produk" value="<?php echo $namaProduk; ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control label">Deskripsi Produk</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi Produk" value="<?php echo $deskripsiProduk; ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control label">Harga Produk</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Produk" value="<?php echo $hargaProduk; ?>">
			</div>
		</div>
	</div>
	<div class="box-footer">
		<button type="submit" class="btn btn-primary pull-right">Simpan</button>
	</div>
</form>