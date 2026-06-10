<?php
define( 'NYP_SLUG', '000_nolan_young_theme_premium_landscaping' );
function nyp_theme_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption', 'style', 'script' ) );
  register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', NYP_SLUG ) ) );
}
add_action( 'after_setup_theme', 'nyp_theme_setup' );
function nyp_asset_uri( $path ) {
  return esc_url( get_template_directory_uri() . '/assets/' . ltrim( $path, '/' ) );
}
function nyp_enqueue_assets() {
  $css = get_template_directory() . '/assets/css/theme.css';
  $js = get_template_directory() . '/assets/js/theme.js';
  wp_enqueue_style( 'nyp-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), file_exists( $css ) ? filemtime( $css ) : '1.0.0' );
  wp_enqueue_script( 'nyp-theme', get_template_directory_uri() . '/assets/js/theme.js', array(), file_exists( $js ) ? filemtime( $js ) : '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'nyp_enqueue_assets' );
