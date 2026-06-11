<?php
if ( ! function_exists( 'astragrid_asset' ) ) {
  function astragrid_asset( $path ) {
    return trailingslashit( get_template_directory_uri() ) . ltrim( $path, '/' );
  }
}
if ( ! function_exists( 'astragrid_section_class' ) ) {
  function astragrid_section_class( $extra = '' ) {
    return trim( 'section ' . $extra );
  }
}
