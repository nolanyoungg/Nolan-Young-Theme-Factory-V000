<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$items = nolan_get_fallback_items( 'featured_work' );
?>
<div class="container">
	<?php nolan_section_header( __( 'Featured work', 'nolan-showcase-theme-01' ), __( 'Recent stories with range, restraint, and atmosphere.', 'nolan-showcase-theme-01' ), __( 'Each project below was shaped to feel specific to the client while still carrying the studio’s editorial point of view.', 'nolan-showcase-theme-01' ) ); ?>
	<div class="card-grid card-grid--work">
		<?php foreach ( $items as $item ) : ?>
			<article class="work-card">
				<img src="<?php echo esc_url( nolan_asset_uri( $item['image'] ) ); ?>" alt="<?php echo esc_attr( $item['alt'] ); ?>">
				<div class="work-card__body">
					<p class="kicker"><?php echo esc_html( $item['category'] ); ?></p>
					<h3><?php echo esc_html( $item['title'] ); ?></h3>
					<p><?php echo esc_html( $item['description'] ); ?></p>
				</div>
			</article>
		<?php endforeach; ?>
	</div>
</div>

