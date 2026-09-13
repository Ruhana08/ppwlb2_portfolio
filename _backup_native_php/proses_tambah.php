<?php
include 'koneksi.php';

$judul      = $_POST['judul'];
$penulis    = $_POST['penulis'];
$harga      = $_POST['harga'];
$tgl_terbit = $_POST['tgl_terbit'];

$query = "INSERT INTO buku (judul, penulis, harga, tgl_terbit) VALUES ('$judul', '$penulis', '$harga', '$tgl_terbit')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: index.php");
} else {
    echo "Gagal menambahkan data: " . mysqli_error($koneksi);
}
?>