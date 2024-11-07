<?php
    $koneksi = mysqli_connect("localhost", "root", "root", "week10-ddpw");

    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>