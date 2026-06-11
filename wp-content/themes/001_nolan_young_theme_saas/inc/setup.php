<?php
if (!defined('ABSPATH')) { exit; }
function signalforge_setup() { add_theme_support('title-tag'); add_theme_support('post-thumbnails'); add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','style','script')); register_nav_menus(array('primary' => esc_html__('Primary Menu', 'nolan-young-saas'))); }
add_action('after_setup_theme', 'signalforge_setup');
