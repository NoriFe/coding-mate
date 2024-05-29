<?php

// Variables

// Includes statments
include(get_theme_file_path('/includes/front/enqueue.php'));

// Hooks
add_action('wp_enqueue_scripts', 'o_enqueue');