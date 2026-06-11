<?php
if (!defined('ABSPATH')) {
    exit;
}

add_action('init', function () {
    add_rewrite_rule('^privacy-policy/?$', 'index.php?pagename=privacy-policy', 'top');
    add_rewrite_rule('^terms/?$', 'index.php?pagename=terms', 'top');
});

