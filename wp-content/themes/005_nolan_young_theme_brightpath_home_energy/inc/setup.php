<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action('after_setup_theme', function () {
    load_theme_textdomain('005_nolan_young_theme_brightpath_home_energy', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(array(
        'primary' => __('Primary Navigation', '005_nolan_young_theme_brightpath_home_energy'),
        'footer' => __('Footer Navigation', '005_nolan_young_theme_brightpath_home_energy'),
    ));
});

