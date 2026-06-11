<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
function astragrid_systems_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
  register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', '002_nolan_young_theme_astragrid_systems' ), 'footer' => esc_html__( 'Footer Menu', '002_nolan_young_theme_astragrid_systems' ) ) );
}
add_action( 'after_setup_theme', 'astragrid_systems_setup' );
