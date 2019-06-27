<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, Anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {

	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
/*

*/	
	$idKategori = $_POST['id_kategori_produk'];
	$idMerek = $_POST['id_merek'];
	$namaProduk = $_POST['nama_produk'];
	$deskripsiProduk = $_POST['deskripsi'];
	$hargaProduk = $_POST['harga'];
	$slide = $_POST['slide'];
	$rekomendasi = $_POST['rekomendasi'];



	$nama_file = $_FILES['gambar']['name'];
	$ukuran_file = $_FILES['gambar']['size'];
	$tipe_file = $_FILES['gambar']['type'];
	$tmp_file = $_FILES['gambar']['tmp_name'];


	

		$path = "../../upload/" . $nama_file;
	if ($tipe_file == "image/jpeg" || $tipe_file ="image/png") {
		if ($ukuran_file <= 1000000){
		if (move_uploaded_file($tmp_file, $path)) {
		$querySimpan = "INSERT INTO tbl_produk SET id_kategori_produk='$idKategori',id_merek='$idMerek',nama_produk='$namaProduk',deskripsi='$deskripsiProduk',harga='$hargaProduk',gambar='$nama_file',slide='$slide',rekomendasi='$rekomendasi'";
			mysqli_query($koneksi, $querySimpan);
		}	
	}
}

	if ($querySimpan) {
		echo "<script> alert('Data Kategori Berhasil Masuk'); window.location = '$admin_url'+'adminweb.php?module=produk';</script>";
		
	}
	else{
		echo "<script> alert('Data Kategori Gagal Dimasukkan'); window.location = '$admin_url'+'adminweb.php?module=tambah_produk';</script>";
	}
}
?>