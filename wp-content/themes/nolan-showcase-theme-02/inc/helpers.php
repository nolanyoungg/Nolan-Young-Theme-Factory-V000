<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function nolan_theme_defaults() {
	return array(
		'brand' => array(
			'name'        => 'Vesper House Studio',
			'title'       => 'Cinematic photography for refined brands, intimate weddings, and modern portraits.',
			'lede'        => 'We shape image-making around natural movement, warm light, and calm direction so every frame feels polished, intimate, and ready for publication.',
			'primary_cta' => array(
				'label' => 'Plan your shoot',
				'url'   => '#contact',
			),
			'secondary_cta' => array(
				'label' => 'Explore selected work',
				'url'   => '#work',
			),
		),
		'featured_work' => array(
			array(
				'title'       => 'The Gilded Atrium',
				'category'    => 'Interior editorial',
				'description' => 'A townhouse story balancing amber window light, sculptural furnishings, and reflective surfaces.',
				'image'       => 'assets/images/portfolio/portfolio-mercer.svg',
				'alt'         => 'Editorial interior scene with warm tones and layered textures.',
			),
			array(
				'title'       => 'Salt & Ember',
				'category'    => 'Campaign portraiture',
				'description' => 'A summer campaign for a skincare label built around movement, linen textures, and a restrained palette.',
				'image'       => 'assets/images/portfolio/portfolio-coast.svg',
				'alt'         => 'Lifestyle campaign portrait with soft light and linen fabric.',
			),
			array(
				'title'       => 'The Winter Conservatory',
				'category'    => 'Wedding story',
				'description' => 'An intimate ceremony in a glasshouse with candlelight, soft pacing, and documentary detail.',
				'image'       => 'assets/images/portfolio/portfolio-bloom.svg',
				'alt'         => 'Wedding portrait with floral tones and cinematic framing.',
			),
		),
		'services' => array(
			array(
				'title'       => 'Brand Sessions',
				'price'       => 'From $1,500',
				'description' => 'Campaign portraits, product stills, and founder imagery for launches that need polish and clarity.',
			),
			array(
				'title'       => 'Weddings & Elopements',
				'price'       => 'From $3,800',
				'description' => 'Calm coverage for intimate celebrations, with attention to atmosphere, family portraits, and the details that matter.',
			),
			array(
				'title'       => 'Editorial Campaigns',
				'price'       => 'Custom quote',
				'description' => 'Location scouting, moodboards, styling direction, and a final image set ready for web, print, and social.',
			),
			array(
				'title'       => 'Portrait Days',
				'price'       => 'From $950',
				'description' => 'Portrait sessions for families, couples, and creative teams who want something elevated without feeling staged.',
			),
		),
		'process' => array(
			array(
				'title'       => '1. Discovery',
				'description' => 'We align on mood, timeline, wardrobe, and usage so the session starts with a clear creative brief.',
			),
			array(
				'title'       => '2. Session Day',
				'description' => 'Direction stays light and precise. We build from real movement, real light, and real chemistry.',
			),
			array(
				'title'       => '3. Delivery',
				'description' => 'Retouched images are delivered in a clean online gallery with file organization, print guidance, and usage notes.',
			),
		),
		'testimonials' => array(
			array(
				'quote'  => 'Vesper House turned our launch into something that felt magazine-ready without losing the warmth of our brand.',
				'name'   => 'Mira Chen',
				'role'   => 'Founder, Lumen Home',
			),
			array(
				'quote'  => 'Our wedding gallery feels quiet, cinematic, and true to the day. The direction never felt forced.',
				'name'   => 'Alec and Naomi',
				'role'   => 'Wedding clients',
			),
			array(
				'quote'  => 'The portrait session felt guided without ever feeling stiff, and the final images have a quiet confidence to them.',
				'name'   => 'Priya and Jonas',
				'role'   => 'Portrait clients',
			),
		),
		'journal' => array(
			array(
				'title' => 'How to brief a shoot when your brand needs editorial polish',
				'date'  => 'April 2026',
				'term'  => 'Studio notes',
			),
			array(
				'title' => 'Choosing locations that make warm light do the heavy lifting',
				'date'  => 'March 2026',
				'term'  => 'Location planning',
			),
			array(
				'title' => 'Why restrained styling can make a campaign feel more expensive',
				'date'  => 'February 2026',
				'term'  => 'Field journal',
			),
		),
		'pillars' => array(
			array(
				'title'       => 'Warm contrast',
				'description' => 'We design sessions around golden hour, window light, and layered shadow so the final set feels dimensional.',
			),
			array(
				'title'       => 'Calm direction',
				'description' => 'Our posing language is quiet and precise, which keeps the experience relaxed without losing polish.',
			),
			array(
				'title'       => 'Tactile detail',
				'description' => 'We look for hand-on-shoulder moments, texture in the clothing, and the unscripted pause between poses.',
			),
		),
		'policies' => array(
			array(
				'title'   => 'Booking',
				'content' => 'A signed agreement and a 30 percent retainer hold your date. Remaining balances are due seven days before the session.',
			),
			array(
				'title'   => 'Rescheduling',
				'content' => 'One reschedule is included with at least ten days notice. Weather or emergency exceptions are handled with care.',
			),
			array(
				'title'   => 'Image use',
				'content' => 'Clients may use delivered images for personal and approved commercial use as stated in the final agreement.',
			),
			array(
				'title'   => 'Privacy',
				'content' => 'Client information is stored only for project communication, delivery, and accounting purposes.',
			),
		),
	);
}

function nolan_theme_mod( $key, $default = '' ) {
	$value = get_theme_mod( $key, $default );
	return is_string( $value ) && $value !== '' ? $value : $default;
}

function nolan_asset_uri( $relative_path ) {
	return get_theme_file_uri( ltrim( $relative_path, '/' ) );
}

function nolan_get_studio_brand() {
	$defaults = nolan_theme_defaults();
	return array(
		'name'            => nolan_theme_mod( 'nolan_brand_name', $defaults['brand']['name'] ),
		'title'           => nolan_theme_mod( 'nolan_hero_title', $defaults['brand']['title'] ),
		'lede'            => nolan_theme_mod( 'nolan_hero_lede', $defaults['brand']['lede'] ),
		'primary_label'   => nolan_theme_mod( 'nolan_primary_cta_label', $defaults['brand']['primary_cta']['label'] ),
		'primary_url'     => nolan_theme_mod( 'nolan_primary_cta_url', $defaults['brand']['primary_cta']['url'] ),
		'secondary_label' => nolan_theme_mod( 'nolan_secondary_cta_label', $defaults['brand']['secondary_cta']['label'] ),
		'secondary_url'   => nolan_theme_mod( 'nolan_secondary_cta_url', $defaults['brand']['secondary_cta']['url'] ),
	);
}

function nolan_get_fallback_items( $key ) {
	$defaults = nolan_theme_defaults();
	return isset( $defaults[ $key ] ) ? $defaults[ $key ] : array();
}

function nolan_policy_pages() {
	return array(
		'privacy-policy'   => 'Privacy Policy',
		'terms-conditions' => 'Terms & Conditions',
		'cookie-policy'    => 'Cookie Policy',
		'refund-policy'    => 'Refund Policy',
	);
}
