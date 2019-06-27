<?php  
include "../lib/config.php";
include "../lib/koneksi.php";

$idKategori = $_GET['id_kategori'];
$queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_kategori WHERE id_kategori='$idKategori'");

$hasilQuery = mysqli_fetch_array($queryEdit);
$idKategori = $hasilQuery['id_kategori'];
$namaKategori = $hasilQuery['nama_kategori'];

?>

<form class="form-horizontal" action="../admin/module/kategori/aksi_edit.php" method="post">
	<input type="hidden" name="id_kategori" value="<?php echo $idKategori; ?>">
	<div class="box-body">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control label">Nama Kategori</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="namaKategori" name="nama_kategori" placeholder="Nama Kategori" value="<?php echo $namaKategori; ?>">
			</div>
		</div>
	</div>
	<div class="box-footer">
		<button type="submit" class="btn btn-primary pull-right">Simpan</button>
	</div>
</form>