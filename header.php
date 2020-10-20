<!doctype html>
<html lang="pt-br">

<head>
    <?php $home = get_template_directory_uri(); ?>
    <title> <?php wp_title(); ?> </title>
    
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="<?= $home ?>/assets/js/gsap.min.js"></script>
    <link rel="stylesheet" href="<?= $home ?>/assets/css/main.css?<?= date('hsmdm') ?>">
    
    <?php wp_head(); ?>

</head>

<body>