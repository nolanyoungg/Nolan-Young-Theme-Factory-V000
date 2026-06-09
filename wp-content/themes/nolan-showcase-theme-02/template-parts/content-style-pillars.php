<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$pillars = nolan_get_fallback_items( 'pillars' );
?>
<div class="container">
	<?php nolan_section_header( __( 'Style pillars', 'nolan-showcase-theme-02' ), __( 'The visual rules that keep the studio voice consistent.', 'nolan-showcase-theme-02' ) ); ?>
	<div class="pillars-grid">
		<?php foreach ( $pillars as $pillar ) : ?>
			<article class="pillar-card">
				<h3><?php echo esc_html( $pillar['title'] ); ?></h3>
				<p><?php echo esc_html( $pillar['description'] ); ?></p>
			</article>
		<?php endforeach; ?>
	</div>
</div>

