<?php

session_start();
include("../koneksi.php");


if(isset($_POST['simpan'])) {

    $produk_id = $_POST['produk_id'];
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];


    $sql = "UPDATE produk SET
        nama_produk='$nama_produk',
        harga='$harga',
        stok='$stok'
        WHERE produk_id=$produk_id";

        $query = mysqli_query($db, $sql);

        if ($query) {
            $_SESSION['notifikasi'] = "Data berhasil diperbarui!";
        } else {
            $_SESSION['notifikasi'] = "Data gagal diperbarui!";
        }

        header('Location: index.php');
} else {

    die("Akses ditolak...");
}
?>