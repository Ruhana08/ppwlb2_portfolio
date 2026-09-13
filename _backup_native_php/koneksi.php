<?php
$koneksi = mysqli_connect("localhost", "root", "", "toko_buku");

if (!$koneksi) {
    die("koneksi gagal: " . mysqli_connect_error());
}
?>