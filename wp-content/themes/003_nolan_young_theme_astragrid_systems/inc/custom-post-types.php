<?php
add_action( 'init', function() {
  register_post_type( 'project', array( 'label' => __( 'Projects', 'astragrid-systems' ), 'public' => true, 'show_in_rest' => true, 'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ), 'has_archive' => true, 'rewrite' => array( 'slug' => 'work' ) ) );
  register_post_type( 'resource', array( 'label' => __( 'Resources', 'astragrid-systems' ), 'public' => true, 'show_in_rest' => true, 'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ), 'has_archive' => true, 'rewrite' => array( 'slug' => 'blog' ) ) );
} );
