<?php
session_start();
include("../koneksi.php");

if(isset($_GET['produk_id'])) {
   $produk_id = $_GET['produk_id'];

    $sql = "DELETE FROM produk WHERE produk_id=$produk_id";
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