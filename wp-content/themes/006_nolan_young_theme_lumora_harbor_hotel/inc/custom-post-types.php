<?php
if (!defined('ABSPATH')) {
    exit;
}

function lumora_harbor_register_story_post_type(): void {
    register_post_type('harbor_story', [
        'label' => __('Harbor Stories', LH_THEME_SLUG),
        'public' => false,
        'show_ui' => true,
        'supports' => ['title', 'editor', 'excerpt'],
        'menu_icon' => 'dashicons-book-alt',
    ]);
}
add_action('init', 'lumora_harbor_register_story_post_type');

