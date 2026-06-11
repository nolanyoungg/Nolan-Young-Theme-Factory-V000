<?php
if (!defined('ABSPATH')) {
    exit;
}

function lumora_harbor_customize_register(WP_Customize_Manager $customize): void {
    $customize->add_section('lumora_harbor_branding', [
        'title' => __('Lumora Harbor Branding', LH_THEME_SLUG),
    ]);
}
add_action('customize_register', 'lumora_harbor_customize_register');

