<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "ecom_0029";

$koneksi = mysqli_connect($server,$username,$password) or die ("Koneksi gagal");
mysqli_select_db($koneksi,$database) or die ("Database tidak bisa dibuka");
?>