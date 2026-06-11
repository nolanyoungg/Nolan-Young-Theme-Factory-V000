<?php
if (!defined('ABSPATH')) { exit; }
add_action('wp_enqueue_scripts', function () { $css = get_template_directory() . '/assets/css/theme.css'; $js = get_template_directory() . '/assets/js/theme.js'; wp_enqueue_style('astragrid-theme', get_template_directory_uri() . '/assets/css/theme.css', [], file_exists($css) ? filemtime($css) : ASTRAGRID_VERSION); wp_enqueue_script('astragrid-theme', get_template_directory_uri() . '/assets/js/theme.js', [], file_exists($js) ? filemtime($js) : ASTRAGRID_VERSION, true); });
