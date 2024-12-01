<?php

session_start();

include("../koneksi.php");

if(isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $kontak = $_POST['kontak'];
    
        $sql ="INSERT INTO distributor
            (nama, kontak)
            VALUES ('$nama','$kontak')";
    
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