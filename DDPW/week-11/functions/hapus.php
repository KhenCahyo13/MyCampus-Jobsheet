<?php
    session_start();
    if (!empty($_SESSION['username']))  {
        require "../config/koneksi.php";
        include "pesan_kilat.php";
        include "anti_injection.php";

        if (!empty($_GET['jabatan'])) {
            $id = antiinjection($koneksi, $_GET['id']);
            $query = "DELETE FROM jabatan WHERE id = '$id'";
            if (mysqli_query($koneksi, $query)) {
                pesan('success', 'Jabatan dihapus');
            } else {
                pesan('danger', 'Jabatan gagal dihapus' . mysqli_error($koneksi));
            }
            header("Location: ../index.php?page=jabatan");
        } else if (!empty($_GET['anggota'])) {
            $id = antiinjection($koneksi, $_GET['id']);
            $query = "DELETE FROM anggota WHERE user_id = '$id'";
            if (mysqli_query($koneksi, $query)) {
                pesan('success', 'Anggota dihapus');
            } else {
                pesan('danger', 'Anggota gagal dihapus' . mysqli_error($koneksi));
            }
            header("Location: ../index.php?page=anggota");
        }
    }
?>