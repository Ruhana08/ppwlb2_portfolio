<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>
<body>
    <h2>Tambah Data Buku</h2>
    <a href="index.php">Kembali</a>
    <br><br>

    <form action="proses_tambah.php" method="POST">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td><input type="text" name="judul" required></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" required></td>
            </tr>
            <tr>
                <td>Tanggal Terbit</td>
                <td><input type="date" name="tgl_terbit" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>
</html>