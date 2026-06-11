<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action('customize_register', function ($customizer) {
    $customizer->add_section('brightpath_contact', array('title' => __('BrightPath Contact', '005_nolan_young_theme_brightpath_home_energy')));
    $customizer->add_setting('brightpath_phone', array('default' => '(555) 123-4567', 'sanitize_callback' => 'sanitize_text_field'));
    $customizer->add_setting('brightpath_email', array('default' => 'hello@brightpathhomeenergy.com', 'sanitize_callback' => 'sanitize_email'));
});

