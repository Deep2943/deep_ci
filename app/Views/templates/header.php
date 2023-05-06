<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="geo.region" content="IN-GJ">
    <meta name="document-distribution" content="Global">

    <!-- generic meta -->
    <meta name="description" content="<?php echo SITE_DESCRIPTION ?>">
    <meta name="keywords" content="<?php echo SITE_KEYWORDS ?>">
    <meta name="author" content="<?php echo SITE_AUTHOR ?>" />

    <!-- og meta -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo SITE_TITLE ?>" />
    <meta property="og:description" content="<?php echo SITE_DESCRIPTION ?>" />
    <meta property="og:url" content="<?php echo SITE_URL ?>" />
    <meta property="og:site_name" content="<?php echo SITE_TITLE ?>" />
    <meta property="og:image" content="<?php echo ASSETS_PATH; ?>images/ci.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- favicon -->
    <link rel="icon" href="<?php echo ASSETS_PATH; ?>images/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo ASSETS_PATH; ?>images/favicon.png">

    <!-- page title -->
    <title><?= esc($title) . ' | ' . SITE_TITLE ?></title>

    <!-- CSS Files  -->
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/main.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/style.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Script Files  -->
    <script src="<?php echo ASSETS_PATH; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo ASSETS_PATH; ?>js/bootstrap.js"></script>
    <script src="<?php echo ASSETS_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo ASSETS_PATH; ?>js/script.js"></script>
    <script src="<?php echo ASSETS_PATH; ?>js/bootstrap.bundle.js"></script>
</head>

<body>
    <!-- <div class="d-lg-none mobile-view-none">Mobile Version of website is still under development</div>
        <div class="d-lg-block d-none"> -->
    <!-- navbar start -->
    <div class="main-navbar-wrapper">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 logo"></div>
                    <div class="col-sm-4"></div>
                    <div class="col-xl-6" style="float:right;">
                        <div class="social-media">
                            <ul class="call-link">
                                <li class="social-link">
                                    <a class="mail-to" href="mailto:demo@gmail.com"><span
                                            class="far fa-envelope-open mail-icon"></span><span
                                            class="span-icon">demo@gmail.com</span></a>
                                </li>
                                <li class="social-link">
                                    <a class="mail-to" href="tel:+919898989898"><span
                                            class="fas fa-mobile-alt mail-icon"></span> <span class="span-icon">+91
                                            98989 89898</span> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar twt-navbar twt-navbar-common navbar-expand-lg nav-light" id="navMain">
            <div class="container">
                <a class="navbar-brand p-3 p-lg-0" href="<?php echo BASE_URL.('/') ?>">
                    <img src="<?php echo ASSETS_PATH; ?>images/ci.png" alt="Deep Ci" class="brand-logo-img">
                </a>
                <button type="button" class="btn navbar-toggler border-0 toggle-menu" id="slide-toggle">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="slide navbar-slide  ml-lg-3" id="slideNavs">
                    <button type="button" class="btn navbar-toggler border-0" id="slide-toggle01">
                        <span class="navbar-dash"></span>
                        <span class="navbar-dash"></span>
                        <span class="navbar-dash"></span>
                    </button>
                    <ul class="navbar-nav ml-auto p-lg-0 pt-5" id="elastic_parentsss" data-targets=".nav-item">
                        <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL.('/') ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL.('/about') ?>">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle product-main-link" data-toggle="dropdown"><span
                                    class="">Dropdown</span></a>
                            <a href="javascript:void(0)" class="nav-link dropdown-toggle prd-menu-bar" data-toggle="dropdown"><span
                                    class="">Dropdown</span></a>
                            <ul class="dropdown-menu">
                                <li class=" all-product-link">
                                    <a class="dropdown-item" href="javascript:void(0)">All
                                        Dropdown</a>
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="javascript:void(0)"> Dropdown
                                        1</a>
                                    <ul class="dropdown-menu">
                                        <li class="d-lg-none d-block"><a class="dropdown-item dropdown-toggle" href="javascript:void(0)">
                                                All</a>
                                        <li><a class="dropdown-item" href="javascript:void(0)">
                                                Sub Dropdown</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">
                                                Sub Dropdown</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="javascript:void(0)">
                                        Dropdown 2</a>
                                    <ul class="dropdown-menu">
                                        <li class="d-lg-none d-block"><a class="dropdown-item dropdown-toggle" href="javascript:void(0)">
                                                All</a>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Sub Dropdown</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Sub Dropdown</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end  -->