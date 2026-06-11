<?php
if (!defined('ABSPATH')) {
    exit;
}

function lumora_harbor_posted_on(): string {
    return sprintf(
        '<time datetime="%1$s">%2$s</time>',
        esc_attr(get_the_date(DATE_W3C)),
        esc_html(get_the_date())
    );
}

