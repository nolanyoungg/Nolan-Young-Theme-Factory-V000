<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
function astragrid_systems_enqueue_assets() {
  $css = get_template_directory() . '/assets/css/theme.css';
  $js = get_template_directory() . '/assets/js/theme.js';
  wp_enqueue_style( 'astragrid-systems-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), file_exists( $css ) ? filemtime( $css ) : '1.0.0' );
  wp_enqueue_script( 'astragrid-systems-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), file_exists( $js ) ? filemtime( $js ) : '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'astragrid_systems_enqueue_assets' );
