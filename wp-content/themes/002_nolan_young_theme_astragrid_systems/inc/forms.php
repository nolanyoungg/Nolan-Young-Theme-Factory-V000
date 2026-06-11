<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
function astragrid_systems_sanitize_message( $value ) { return sanitize_textarea_field( $value ); }
