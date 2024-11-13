<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!empty($_SESSION['level'])) {
        require "config/koneksi.php";
        require "functions/pesan_kilat.php";
        include "admin/templates/header.php";

        if (!empty($_GET['page'])) {
            include "admin/modules/" . $_GET['page'] . "/index.php";
        } else {
            include "admin/templates/home.php";
        }

        include "admin/templates/footer.php";
    } else {
        header("Location: login.php");
    }
?>