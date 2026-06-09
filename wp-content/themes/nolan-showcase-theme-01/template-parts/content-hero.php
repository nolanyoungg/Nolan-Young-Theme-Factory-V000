<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$brand = nolan_get_studio_brand();
?>
<div class="container hero-grid">
	<div class="hero-copy">
		<?php nolan_inline_kicker( __( 'Rowan Vale Studio', 'nolan-showcase-theme-01' ) ); ?>
		<h1><?php echo esc_html( $brand['title'] ); ?></h1>
		<p class="hero-lede"><?php echo esc_html( $brand['lede'] ); ?></p>
		<div class="button-row">
			<?php nolan_button( $brand['primary_label'], $brand['primary_url'], 'primary' ); ?>
			<?php nolan_button( $brand['secondary_label'], $brand['secondary_url'], 'ghost' ); ?>
		</div>
		<div class="hero-metrics" aria-label="<?php esc_attr_e( 'Studio highlights', 'nolan-showcase-theme-01' ); ?>">
			<div><strong>12</strong><span><?php esc_html_e( 'years photographing editorial stories', 'nolan-showcase-theme-01' ); ?></span></div>
			<div><strong>180+</strong><span><?php esc_html_e( 'sessions, campaigns, and weddings delivered', 'nolan-showcase-theme-01' ); ?></span></div>
			<div><strong>32</strong><span><?php esc_html_e( 'published and launch-ready campaigns', 'nolan-showcase-theme-01' ); ?></span></div>
		</div>
	</div>
	<div class="hero-visual" aria-hidden="true">
		<img src="<?php echo esc_url( nolan_asset_uri( 'assets/images/hero/hero-editorial.svg' ) ); ?>" alt="" loading="eager">
	</div>
</div>

