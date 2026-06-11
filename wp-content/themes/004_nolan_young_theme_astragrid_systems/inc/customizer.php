<?php
if (!defined('ABSPATH')) { exit; }
add_action('customize_register', function ($wp_customize) { $wp_customize->add_section('astragrid_theme_options', ['title' => __('AstraGrid Options', 'astragrid-systems')]); });
