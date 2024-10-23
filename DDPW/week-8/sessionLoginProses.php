<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "1234") {
        session_start();;
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        echo "Login Berhasil!. Silahkan menuju <a href='homeSession.php'>Halaman Home</a>";
    } else {
        echo "Login Gagal!. Silahkan menuju <a href='sessionLoginForm.html'>Halaman Login</a>";
    }
?>