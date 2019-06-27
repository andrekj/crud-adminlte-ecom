<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href = ../../index.php><b>LOGIN</b></a></center>";
} else {

	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idMerek = $_GET['id_merek'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_merek WHERE id_merek='$idMerek'")or die(mysqli_error());
	if ($queryHapus){
		echo "<script> alert ('Data Merek Berhasil di Hapus'); window.location = '$admin_url'+'adminweb.php?module=merek';</script>";
	} else {
		echo "<script> alert ('Data Merek Gagal di Hapus'); window.location = '$admin_url'+'adminweb.php?module=merek';</script>";
	}
}
?>

