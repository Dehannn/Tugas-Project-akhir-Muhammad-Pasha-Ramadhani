<!DOCTYPE html>
<html>
<head>
    <title>Supermarket || Muhammad Pasha Ramadhani</title>
</head>
<body>
    <h3>Tambah Data Produk</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk" required></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" required></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" required></td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>