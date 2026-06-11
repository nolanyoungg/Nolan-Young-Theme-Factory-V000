<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
function astragrid_systems_asset( $file ) { return esc_url( get_template_directory_uri() . '/assets/images/' . ltrim( $file, '/' ) ); }
