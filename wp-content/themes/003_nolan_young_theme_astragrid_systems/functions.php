<?php
/** AstraGrid Systems functions. */
require_once get_template_directory() . '/inc/helpers.php';
require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/template-tags.php';
require_once get_template_directory() . '/inc/custom-post-types.php';
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/forms.php';
require_once get_template_directory() . '/inc/newsletter.php';
require_once get_template_directory() . '/inc/policy-routing.php';
add_filter( 'body_class', function( $classes ) { $classes[] = 'astragrid-systems'; return $classes; } );
