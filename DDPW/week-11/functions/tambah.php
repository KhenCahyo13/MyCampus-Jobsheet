<?php
    session_start();

    if (!empty($_SESSION['username'])) {
        require "../config/koneksi.php";
        include "pesan_kilat.php";
        include "anti_injection.php";

        if (!empty($_GET['jabatan'])) {
            $jabatan = antiinjection($koneksi, $_GET['jabatan']);
            $keterangan = antiinjection($koneksi, $_GET['keterangan']);
            $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";

            if (mysqli_query($koneksi, $query)) {
                pesan('success', 'Jabatan ditambahkan');
            } else {
                pesan('danger', 'Jabatan gagal ditambahkan' . mysqli_error($koneksi));
            }
            header("Location: ../index.php?page=jabatan");
        } else if (!empty($_GET['anggota'])) {
            $username = antiinjection($koneksi, $_POST['username']);
            $password = antiinjection($koneksi, $_POST['password']);
            $level = antiinjection($koneksi, $_POST['level']);
            $jabatan = antiinjection($koneksi, $_POST['jabatan']);
            $nama = antiinjection($koneksi, $_POST['nama']);
            $jenis_kelamin = antiinjection($koneksi, $_POST['jenis_kelamin']);
            $alamat = antiinjection($koneksi, $_POST['alamat']);
            $no_telp = antiinjection($koneksi, $_POST['no_telp']);

            $salt = bin2hex(random_bytes(16));
            $combined_password = $salt . $password;
            $hashed_password = password_hash($combined_password, PASSWORD_BCRYPT);

            $query = "INSERT INTO user (username, password, salt, level) VALUES ('$username', '$hashed_password', '$salt', '$level')";

            if (mysqli_query($koneksi, $query)) {
                $last_id = mysqli_insert_id($koneksi);
                $query = "INSERT INTO anggota (user_id, jabatan_id, nama, jenis_kelamin, alamat, no_telp) VALUES ('$last_id', '$jabatan', '$nama', '$jenis_kelamin', '$alamat', '$no_telp')";
                if (mysqli_query($koneksi, $query)) {
                    pesan('success', 'Anggota ditambahkan');
                } else {
                    pesan('danger', 'Anggota gagal ditambahkan' . mysqli_error($koneksi));
                }
            } else {
                pesan('danger', 'Anggota gagal ditambahkan' . mysqli_error($koneksi));
            }
            header("Location: ../index.php?page=anggota");
        }
    }
?>