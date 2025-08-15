<?php
include "config.php"
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="<?php echo $subtitle; ?>">
    <!-- Site Title -->
    <title><?php echo $title; ?> - <?php echo $subtitle; ?></title>
    <!-- Site Favicon -->
    <link rel="shortcut icon" href="theme/images/logo.png" type="image/ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="theme/css/bootstrap.min.css">
    <!-- Material Icon -->
    <link rel="stylesheet" href="theme/css/materialdesignicons.min.css">
    <!-- Magnific Popup -->
    <link href="theme/css/magnific-popup.css" rel="stylesheet" />
    <!-- Carousel Slider -->
    <link rel="stylesheet" href="theme/css/owl.carousel.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="theme/css/animate.css">
    <!-- Custom  CSS -->
    <link rel="stylesheet" href="theme/css/style.css">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="<?php echo $title; ?>">
    <meta itemprop="description" content="<?php echo $subtitle; ?>">
    <meta itemprop="image" content="theme/images/logo.png">

    <!-- Facebook Meta Tags -->
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $subtitle; ?>" />
    <meta property="og:image" content="theme/images/logo.png">
    <meta property="og:site_name" content="<?php echo $title; ?>" />
</head>


<body>
    <!-- Start Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- End preloader -->
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand brand-logo mr-4" href="index.php">
                <img src="theme/images/logo.png" class="img-fluid logo-light" alt="">
                <img src="theme/images/logo.png" class="img-fluid logo-dark" alt="">
            </a>
            <div class="navbar-collapse collapse justify-content-center" id="navbarCollapse">
                <ul class="navbar-nav navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="servicos.php" class="nav-link">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a href="localizacao.php" class="nav-link">Como chegar?</a>
                    </li>

                </ul>
                <div class="menu-close-btn"><i class="mdi mdi-close-circle-outline"></i></div>
            </div>
            <div class="header_btn">
                <a href="fale_conosco.php" class="btn btn-sm white-btn">Fale conosco <i class="mdi mdi-arrow-right ml-2"></i></a>
                <button class="navbar-toggler ml-2 p-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

