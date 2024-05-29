<?php

// Variables

// Includes statments
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));

// Hooks
add_action('wp_enqueue_scripts', 'o_enqueue');
add_action('wp_head', 'o_head', 5);