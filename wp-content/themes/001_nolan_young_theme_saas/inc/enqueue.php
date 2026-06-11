<?php
if (!defined('ABSPATH')) { exit; }
function signalforge_enqueue_assets() { $css = get_template_directory() . '/assets/css/theme.css'; $js = get_template_directory() . '/assets/js/theme.js'; wp_enqueue_style('signalforge-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), file_exists($css) ? filemtime($css) : SIGNALFORGE_VERSION); wp_enqueue_script('signalforge-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), file_exists($js) ? filemtime($js) : SIGNALFORGE_VERSION, true); }
add_action('wp_enqueue_scripts', 'signalforge_enqueue_assets');
