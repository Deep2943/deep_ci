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
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/bootstrap.min.css">


    <!-- Script Files  -->
    <script src="<?php echo ASSETS_PATH; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo ASSETS_PATH; ?>js/bootstrap.js"></script>
    <script src="<?php echo ASSETS_PATH; ?>js/bootstrap.bundle.js"></script>
</head>

<body>

    <head>
        <h1>This is a Header</h1>
        <a href="<?php echo BASE_URL.('/') ?>" class="text-white">Home</a>
        <a href="<?php echo BASE_URL.('/about') ?>" class="text-white">About</a>
    </head>