<?php

/// CPTS
/// require get_template_directory() . '/cpts.php';
define('THEMEROOT', get_stylesheet_directory_uri());
define('TEMPLATE', get_template_directory_uri());
define('IMAGES', THEMEROOT . '/images');

add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption',));

require_once 'functions/func-admin.php';
require_once 'functions/func-debug.php';
require_once 'functions/func-menu.php';
require_once 'functions/func-script.php';
require_once 'functions/func-style.php';
