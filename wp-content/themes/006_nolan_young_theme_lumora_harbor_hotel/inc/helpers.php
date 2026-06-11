<?php
if (!defined('ABSPATH')) {
    exit;
}

function lumora_harbor_excerpt_text(int $length = 28): string {
    return wp_trim_words(get_the_excerpt(), $length);
}

