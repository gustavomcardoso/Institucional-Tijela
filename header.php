<!doctype html>
<html lang="pt-br">

<head>
    <?php $home = get_template_directory_uri(); ?>
    <title> <?php wp_title(); ?> </title>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="<?= $home ?>/assets/js/gsap.min.js"></script>

    <?php wp_head(); ?>

</head>

<body>
