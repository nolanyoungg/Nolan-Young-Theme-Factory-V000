<?php
if (!defined('ABSPATH')) {
    exit;
}

function lumora_harbor_register_image_sizes(): void {
    add_image_size('lumora-harbor-card', 1200, 800, true);
    add_image_size('lumora-harbor-hero', 1600, 1100, true);
}
add_action('after_setup_theme', 'lumora_harbor_register_image_sizes', 11);

