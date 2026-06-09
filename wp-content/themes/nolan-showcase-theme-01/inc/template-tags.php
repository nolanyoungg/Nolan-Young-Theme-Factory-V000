<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function nolan_section_header( $eyebrow, $title, $lede = '', $alignment = '' ) {
	$classes = 'section-header';
	if ( $alignment ) {
		$classes .= ' section-header--' . sanitize_html_class( $alignment );
	}
	?>
	<header class="<?php echo esc_attr( $classes ); ?>">
		<?php if ( $eyebrow ) : ?>
			<p class="section-eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
		<?php endif; ?>
		<h2 class="section-title"><?php echo esc_html( $title ); ?></h2>
		<?php if ( $lede ) : ?>
			<p class="section-lede"><?php echo wp_kses_post( $lede ); ?></p>
		<?php endif; ?>
	</header>
	<?php
}

function nolan_button( $label, $url, $variant = 'primary' ) {
	$classes = 'button button--' . sanitize_html_class( $variant );
	?>
	<a class="<?php echo esc_attr( $classes ); ?>" href="<?php echo esc_url( $url ); ?>">
		<?php echo esc_html( $label ); ?>
	</a>
	<?php
}

function nolan_inline_kicker( $label ) {
	?>
	<p class="kicker"><?php echo esc_html( $label ); ?></p>
	<?php
}

function nolan_primary_menu_fallback() {
	$items = array(
		array( 'label' => __( 'Home', 'nolan-showcase-theme-01' ), 'url' => home_url( '/' ) ),
		array( 'label' => __( 'Work', 'nolan-showcase-theme-01' ), 'url' => home_url( '/#work' ) ),
		array( 'label' => __( 'Services', 'nolan-showcase-theme-01' ), 'url' => home_url( '/#services' ) ),
		array( 'label' => __( 'Contact', 'nolan-showcase-theme-01' ), 'url' => home_url( '/contact/' ) ),
	);
	echo '<ul class="nav-list">';
	foreach ( $items as $item ) {
		printf(
			'<li><a href="%1$s">%2$s</a></li>',
			esc_url( $item['url'] ),
			esc_html( $item['label'] )
		);
	}
	echo '</ul>';
}
