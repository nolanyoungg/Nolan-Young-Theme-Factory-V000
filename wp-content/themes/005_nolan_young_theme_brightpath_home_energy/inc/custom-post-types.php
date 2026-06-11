<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action('init', function () {
    register_post_type('brightpath_case_study', array(
        'labels' => array('name' => __('Case Studies', '005_nolan_young_theme_brightpath_home_energy')),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'work'),
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'show_in_rest' => true,
    ));
});

