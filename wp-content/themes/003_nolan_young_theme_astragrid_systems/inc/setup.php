<?php
add_action( 'after_setup_theme', function() {
  load_theme_textdomain( 'astragrid-systems', get_template_directory() . '/languages' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'align-wide' );
  add_theme_support( 'editor-styles' );
  add_editor_style( 'assets/css/theme.css' );
  register_nav_menus( array( 'primary' => __( 'Primary Navigation', 'astragrid-systems' ) ) );
} );
