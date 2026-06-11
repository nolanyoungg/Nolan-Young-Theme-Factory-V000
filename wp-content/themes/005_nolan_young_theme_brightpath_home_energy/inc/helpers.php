<?php
if (!defined('ABSPATH')) {
    exit;
}

function brightpath_theme_path($path) {
    return trailingslashit(get_template_directory()) . ltrim($path, '/');
}

