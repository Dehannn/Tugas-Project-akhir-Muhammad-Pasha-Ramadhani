<?php
include("../koneksi.php");
$distributor_id = $_GET['distributor_id'];

$query = $db->query("SELECT * FROM distributor WHERE distributor_id = '$distributor_id'");
$distributor = $query->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Supermarket || Muhammad Pasha Ramadhani</title>
</head>
<body>
    <h3>Edit Data Distributor</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="distributor_id" value="<?php echo $distributor['distributor_id']; ?>">
        <table border="0">
            <tr>
                <td>Nama Distributor</td>
                <td>
                    <input type="text" name="nama"
                    value="<?php echo $distributor['nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td>
                    <input type="text" name="kontak"
                    value="<?php echo $distributor['kontak']; ?>" required>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>