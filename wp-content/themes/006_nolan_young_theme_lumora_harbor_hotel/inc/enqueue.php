<?php
if (!defined('ABSPATH')) {
    exit;
}

function lumora_harbor_enqueue_editor_styles(): void {
    add_editor_style('assets/css/theme.css');
}
add_action('after_setup_theme', 'lumora_harbor_enqueue_editor_styles');

