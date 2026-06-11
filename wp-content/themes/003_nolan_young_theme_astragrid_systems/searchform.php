<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="visually-hidden" for="search-field"><?php esc_html_e( 'Search for:', 'astragrid-systems' ); ?></label>
	<input id="search-field" type="search" name="s" aria-label="<?php esc_attr_e( 'Search the site', 'astragrid-systems' ); ?>" value="<?php echo get_search_query(); ?>">
	<button class="button-secondary" type="submit"><?php esc_html_e( 'Search', 'astragrid-systems' ); ?></button>
</form>
