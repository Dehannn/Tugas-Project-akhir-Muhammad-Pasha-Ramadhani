<?php
include ("../koneksi.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Supermarket || Muhammad Pasha Ramadhani</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<ul>
<li><a href="../distributor/index.php">Data Distributor</a></li>
<li><a href="index.php">Data Produk</a></li>
</ul>
<h2>Data Produk</h2>
<?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?> </p>

        <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>
        <table>
            <thead align="center">
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th><a href="tambah_produk.php">Tambah Data</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = $db->query("SELECT * FROM produk");
                
                while ($produk = $query->fetch_assoc()) {
                    
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $produk['nama_produk']?></td>
                        <td><?php echo $produk['harga']?></td>
                        <td><?php echo $produk['stok']?></td>
                        <td align="center">
                            
                            <a href="edit_produk.php?produk_id=<?php echo $produk['produk_id'] ?>">Edit</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus data?')"href="hapus_produk.php?produk_id=<?php echo $produk['produk_id'] ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php
                } 
                ?>
            </tbody>
        </table>

        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    
</body>
</html>