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
<body>
<ul>
<li><a href="index.php">Data Distributor</a></li>
<li><a href="../produk/index.php">Data Produk</a></li>
</ul>
<h2>Data Distributor</h2>
<?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?> </p>

        <?php unset($_SESSION['notifikasi']); ?>
        <?php endif; ?>
        <table>
            <thead align="center">
                <tr>
                    <th>#</th>
                    <th>Nama Distributor</th>
                    <th>kontak</th>
                    <th><a href="tambah_distributor.php">Tambah Data</a></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = $db->query("SELECT * FROM distributor");
                
                while ($distributor = $query->fetch_assoc()) {
                    
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $distributor['nama']?></td>
                        <td><?php echo $distributor['kontak']?> </td>
                        <td align="center">
                            
                            <a href="edit_distributor.php?distributor_id=<?php echo $distributor['distributor_id'] ?>">Edit</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus data?')"href="hapus_distributor.php?distributor_id=<?php echo $distributor['distributor_id'] ?>">Hapus</a>
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