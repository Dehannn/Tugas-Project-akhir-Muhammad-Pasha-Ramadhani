<?php
session_start();
include("../koneksi.php");

if(isset($_GET['distributor_id'])) {
   $distributor_id = $_GET['distributor_id'];

    $sql = "DELETE FROM distributor WHERE distributor_id=$distributor_id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        $_SESSION['notifikasi'] = "Data berhasil dihapus!";
    } else {
        $_SESSION['notifikasi'] = "Data gagal dihapus!";
    }

        header('Location: index.php');
    } else {
        die("Akses ditolak...");
}
?>