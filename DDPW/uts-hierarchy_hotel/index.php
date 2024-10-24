<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hierarchy Hotel</title>
    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.14.0/jquery-ui.js" integrity="sha256-u0L8aA6Ev3bY2HI4y0CAyr9H8FRWgX4hZ9+K7C2nzdc=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/general.css">
    <link rel="stylesheet" href="./assets/css/font.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/slider.css">
    <link rel="stylesheet" href="./assets/css/price-check.css">
    <!-- Custom Scripts -->
    <script src="./assets/js/slider.js"></script>
</head>

<body>
    <?php
        if (isset($_SESSION['isLoggedIn'])) {
    ?>
        <!-- Navbar -->
        <header>
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="container">
                    <a class="navbar-brand fs-6" href="#">Hierarchy Hotel</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="d-flex align-items-center gap-4 ms-auto">
                            <a class="text-decoration-none text-secondary fs-7" aria-current="page" href="index.php?page=home">Home</a>
                            <a class="text-decoration-none text-secondary fs-7" aria-current="page" href="index.php?page=price-check">Price Check</a>
                            <a class="text-decoration-none text-secondary fs-7" aria-current="page" href="./controllers/logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    <?php
        }
    ?>
    <!-- Render Page -->
    <?php
    if (!isset($_SESSION['isLoggedIn'])) {
        include 'pages/login.php';
    } else {
        if (isset($_GET['page'])) {
            if ($_GET['page'] === 'home') {
                include 'pages/home.php';
            } else if ($_GET['page'] === 'price-check') {
                include 'pages/price-check.php';
            } else {
                include 'pages/home.php';
            }
        } else {
            include 'pages/home.php';
        }
    }
    ?>

    <script src="./assets/js/calculate_price-ajax.js"></script>
    <script src="./assets/js/check_booking_price_home-ajax.js"></script>
    <script src="./assets/js/login-ajax.js"></script>
</body>

</html>