<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_enqueue_scripts', function () {
    $theme_uri = get_template_directory_uri();
    $css_path = get_template_directory() . '/assets/css/theme.css';
    $js_path = get_template_directory() . '/assets/js/theme.js';

    wp_enqueue_style('brightpath-theme', $theme_uri . '/assets/css/theme.css', array(), filemtime($css_path));
    wp_enqueue_script('brightpath-theme', $theme_uri . '/assets/js/theme.js', array(), filemtime($js_path), true);
});

