<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
function astragrid_systems_register_project_type() { register_post_type( 'astragrid_project', array( 'label' => esc_html__( 'Projects', '${slug}' ), 'public' => true, 'show_in_rest' => true, 'supports' => array( 'title', 'editor', 'thumbnail' ) ) ); }
add_action( 'init', 'astragrid_systems_register_project_type' );
