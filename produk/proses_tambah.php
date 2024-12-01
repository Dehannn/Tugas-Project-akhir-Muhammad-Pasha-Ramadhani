<?php

session_start();
include("../koneksi.php");

if(isset($_POST['simpan'])) {
        $nama_produk = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
    
        $sql ="INSERT INTO produk
            (nama_produk, harga, stok)
            VALUES ('$nama_produk','$harga','$stok')";
    
    $query = mysqli_query( $db, $sql);
     
    if ($query) {
        $_SESSION['notifikasi'] = "Data berhasil ditambahkan!";
    } else {
        $_SESSION['notifikasi'] = "Data gagal ditambahkan!";
    }
        header('Location: index.php');
    } else {
        die("Akses ditolak...");
    }
?>