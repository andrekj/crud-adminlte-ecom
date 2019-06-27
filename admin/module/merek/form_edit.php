<?php  
include "../lib/config.php";
include "../lib/koneksi.php";

$idMerek = $_GET['id_merek'];
$queryEdit = mysqli_query($koneksi, "SELECT * FROM tbl_merek WHERE id_merek='$idMerek'");

$hasilQuery = mysqli_fetch_array($queryEdit);
$idMerek = $hasilQuery['id_merek'];
$namaMerek = $hasilQuery['nama_merek'];

?>

<form class="form-horizontal" action="../admin/module/merek/aksi_edit.php" method="post">
	<input type="hidden" name="id_merek" value="<?php echo $idMerek; ?>">
	<div class="box-body">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control label">Nama Merek</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="namaMerek" name="nama_merek" placeholder="Nama Merek" value="<?php echo $namaMerek; ?>">
			</div>
		</div>
	</div>
	<div class="box-footer">
		<button type="submit" class="btn btn-primary pull-right">Simpan</button>
	</div>
</form>