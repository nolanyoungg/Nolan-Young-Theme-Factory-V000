<?php
add_action( 'wp_enqueue_scripts', function() {
  $css = get_template_directory() . '/assets/css/theme.css';
  $js  = get_template_directory() . '/assets/js/theme.js';
  wp_enqueue_style( 'astragrid-systems', get_template_directory_uri() . '/assets/css/theme.css', array(), file_exists( $css ) ? filemtime( $css ) : null );
  wp_enqueue_script( 'astragrid-systems', get_template_directory_uri() . '/assets/js/theme.js', array(), file_exists( $js ) ? filemtime( $js ) : null, true );
} );
