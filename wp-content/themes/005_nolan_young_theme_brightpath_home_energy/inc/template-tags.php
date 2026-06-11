<?php
if (!defined('ABSPATH')) {
    exit;
}

function brightpath_card_link($label, $url, $class = 'card-link') {
    return '<a class="' . esc_attr($class) . '" href="' . esc_url($url) . '">' . esc_html($label) . '</a>';
}

