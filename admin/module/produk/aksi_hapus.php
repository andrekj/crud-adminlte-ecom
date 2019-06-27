<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href = ../../index.php><b>LOGIN</b></a></center>";
} else {

	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idProduk = $_GET['id_produk'];
	$queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_produk WHERE id_produk='$idProduk'")or die(mysqli_error());
	if ($queryHapus){
		echo "<script> alert ('Data Kategori Berhasil di Hapus'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
	} else {
		echo "<script> alert ('Data Kategori Gagal di Hapus'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
	}
}
?>