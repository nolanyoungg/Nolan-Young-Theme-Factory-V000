<?php
add_action( 'customize_register', function( $wp_customize ) {
  $wp_customize->add_section( 'astragrid_theme', array( 'title' => __( 'AstraGrid Theme', 'astragrid-systems' ) ) );
  $wp_customize->add_setting( 'astragrid_accent', array( 'default' => '#55d6ff', 'sanitize_callback' => 'sanitize_hex_color' ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'astragrid_accent', array( 'label' => __( 'Accent color', 'astragrid-systems' ), 'section' => 'astragrid_theme' ) ) );
} );
