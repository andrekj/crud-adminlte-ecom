<?php
session_start();
if (empty($_SESSION['username']) and empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href = ../../index.php><b>LOGIN</b></a></center>";
} else {

	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idProduk = $_POST['id_produk'];
	$namaProduk = $_POST['nama_produk'];
	$deskripsiProduk = $_POST['deskripsi'];
	$hargaProduk = $_POST['harga'];
	$queryEdit = mysqli_query($koneksi, "UPDATE tbl_produk SET nama_produk = '$namaProduk', deskripsi = '$deskripsiProduk',
	harga = '$hargaProduk' WHERE id_produk='$idProduk'");

	if ($queryEdit) {
		echo "<script> alert ('Data Produk Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
	} else {
		echo "<script> alert ('Data Produk Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=produk&id_produk'+'$idKategori';</script>";
	}
}