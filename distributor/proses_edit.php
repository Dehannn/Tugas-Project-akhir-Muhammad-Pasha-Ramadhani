<?php

session_start();
include("../koneksi.php");


if(isset($_POST['simpan'])) {

    $distributor_id = $_POST['distributor_id'];
    $nama = $_POST['nama'];
    $kontak = $_POST['kontak'];


    $sql = "UPDATE distributor SET
        nama='$nama',
        kontak='$kontak'
        WHERE distributor_id=$distributor_id";

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