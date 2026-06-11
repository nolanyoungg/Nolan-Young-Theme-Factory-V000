<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
function astragrid_systems_customize_register( $wp_customize ) { $wp_customize->add_section( 'astragrid_systems_brand', array( 'title' => esc_html__( 'AstraGrid Brand', '${slug}' ) ) ); }
add_action( 'customize_register', 'astragrid_systems_customize_register' );
