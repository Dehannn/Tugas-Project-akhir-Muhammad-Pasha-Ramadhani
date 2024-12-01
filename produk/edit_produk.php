<?php
include("../koneksi.php");
$produk_id = $_GET['produk_id'];

$query = $db->query("SELECT * FROM produk WHERE produk_id = '$produk_id'");
$produk = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Supermarket || Muhammad Pasha Ramadhani</title>
</head>
<body>
    <h3>Edit Data Produk</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="produk_id" value="<?php echo $produk['produk_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Produk</td>
                <td>
                    <input type="text" name="nama_produk"
                    value="<?php echo $produk['nama_produk']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="text" name="harga"
                    value="<?php echo $produk['harga']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>
                    <input type="text" name="stok"
                    value="<?php echo $produk['stok']; ?>" required>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>