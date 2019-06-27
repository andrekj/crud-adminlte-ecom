<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href = ../../index.php><b>LOGIN</b></a></center>";
} else {

	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idMerek = $_POST['id_merek'];
	$namaMerek = $_POST['nama_merek'];
	$queryEdit = mysqli_query($koneksi,"UPDATE tbl_merek SET nama_merek = '$namaMerek' WHERE id_merek='$idMerek'");

	if ($queryEdit){
		echo "<script> alert ('Data Merek Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=merek';</script>";
	} else {
		echo "<script> alert ('Data Merek Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=merek&id_merek'+'$idKategori';</script>";
	}
}
?>