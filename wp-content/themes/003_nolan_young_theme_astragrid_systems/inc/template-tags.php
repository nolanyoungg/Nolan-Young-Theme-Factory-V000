<?php
/**
 * AstraGrid Systems template helpers.
 */

if ( ! function_exists( 'astragrid_asset' ) ) {
	function astragrid_asset( $path ) {
		return trailingslashit( get_template_directory_uri() ) . ltrim( $path, '/' );
	}
}

if ( ! function_exists( 'astragrid_home_link' ) ) {
	function astragrid_home_link() {
		return home_url( '/' );
	}
}

