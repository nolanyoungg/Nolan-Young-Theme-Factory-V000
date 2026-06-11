<?php
if (!defined('ABSPATH')) {
    exit;
}

$brightpath_includes = array(
    '/inc/setup.php',
    '/inc/enqueue.php',
    '/inc/template-tags.php',
    '/inc/helpers.php',
    '/inc/custom-post-types.php',
    '/inc/customizer.php',
    '/inc/forms.php',
    '/inc/newsletter.php',
    '/inc/policy-routing.php',
);

foreach ($brightpath_includes as $file) {
    require_once get_template_directory() . $file;
}

