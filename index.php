<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
</head>
<body>
    <h2>Daftar Buku</h2>
    <a href="tambah.php">+ Tambah Buku Baru</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id DESC");
            while ($data = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($data['judul']); ?></td>
                <td><?= htmlspecialchars($data['penulis']); ?></td>
                <td>Rp <?= number_format($data['harga'], 0, ',', '.'); ?></td>
                <td><?= $data['tgl_terbit']; ?></td>
                <td>
                    <a href="edit.php?id=<?= $data['id']; ?>">Edit</a> | 
                    <a href="proses_hapus.php?id=<?= $data['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>