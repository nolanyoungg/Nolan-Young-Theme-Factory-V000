<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function nolan_theme_defaults() {
	return array(
		'brand' => array(
			'name'        => 'Rowan Vale Studio',
			'title'       => 'Editorial photography for brands, couples, and creative founders.',
			'lede'        => 'We shape image-making around natural movement, warm light, and calm direction so every frame feels composed, intimate, and ready for publication.',
			'primary_cta' => array(
				'label' => 'Book a session',
				'url'   => '#contact',
			),
			'secondary_cta' => array(
				'label' => 'View featured work',
				'url'   => '#work',
			),
		),
		'featured_work' => array(
			array(
				'title'       => 'The Mercer Penthouse',
				'category'    => 'Interior editorial',
				'description' => 'A luminous apartment story with glass reflections, tailored styling, and tactile shadow detail.',
				'image'       => 'assets/images/portfolio/portfolio-mercer.svg',
				'alt'         => 'Editorial interior scene with warm tones and layered textures.',
			),
			array(
				'title'       => 'Salt & Linen',
				'category'    => 'Campaign portraiture',
				'description' => 'Coastal brand imagery created for a lifestyle label launching its spring collection.',
				'image'       => 'assets/images/portfolio/portfolio-coast.svg',
				'alt'         => 'Lifestyle campaign portrait with soft light and linen fabric.',
			),
			array(
				'title'       => 'Marrow & Bloom',
				'category'    => 'Wedding story',
				'description' => 'An intimate winter ceremony photographed with a quiet, cinematic rhythm.',
				'image'       => 'assets/images/portfolio/portfolio-bloom.svg',
				'alt'         => 'Wedding portrait with floral tones and cinematic framing.',
			),
		),
		'services' => array(
			array(
				'title'       => 'Brand Sessions',
				'price'       => 'From $1,200',
				'description' => 'Strategy-led portraits, product details, and campaign frames for founders, artisans, and service brands.',
			),
			array(
				'title'       => 'Weddings & Elopements',
				'price'       => 'From $3,400',
				'description' => 'A calm, attentive approach to wedding coverage with an emphasis on honest moments and refined detail.',
			),
			array(
				'title'       => 'Editorial Campaigns',
				'price'       => 'Custom quote',
				'description' => 'Location scouting, art direction, and image delivery sized for launch campaigns, lookbooks, and press use.',
			),
			array(
				'title'       => 'Family Milestones',
				'price'       => 'From $850',
				'description' => 'Portrait sessions that feel relaxed and natural, with room for movement, laughter, and meaningful keepsakes.',
			),
		),
		'process' => array(
			array(
				'title'       => '1. Discovery',
				'description' => 'We align on mood, timeline, wardrobe, and usage so the session feels intentional from the beginning.',
			),
			array(
				'title'       => '2. Session Day',
				'description' => 'Direction stays light and precise. We build from real movement, real light, and real chemistry.',
			),
			array(
				'title'       => '3. Delivery',
				'description' => 'Retouched images are delivered in a clean online gallery with print guidance and usage notes.',
			),
		),
		'testimonials' => array(
			array(
				'quote'  => 'Rowan Vale made our launch look richer than we thought possible. The direction was effortless and the files gave our brand a real point of view.',
				'name'   => 'Mira Chen',
				'role'   => 'Founder, Lumen Home',
			),
			array(
				'quote'  => 'The whole wedding felt calm because the process was calm. Every image has depth, warmth, and the kind of honesty that does not age out.',
				'name'   => 'Alec and Naomi',
				'role'   => 'Wedding clients',
			),
			array(
				'quote'  => 'Our family session finally looked like us instead of a staged set. The portraits are relaxed, elegant, and full of small true moments.',
				'name'   => 'Priya and Jonas',
				'role'   => 'Family session clients',
			),
		),
		'journal' => array(
			array(
				'title' => 'What makes an image feel editorial instead of posed',
				'date'  => 'April 2026',
				'term'  => 'Studio notes',
			),
			array(
				'title' => 'How to build a cohesive visual brief for your next launch',
				'date'  => 'March 2026',
				'term'  => 'Brand planning',
			),
			array(
				'title' => 'Why we still shoot on location when the light matters most',
				'date'  => 'February 2026',
				'term'  => 'Field journal',
			),
		),
		'pillars' => array(
			array(
				'title'       => 'Cinematic light',
				'description' => 'We design sessions around golden hour, window light, and layered shadow so the final set feels dimensional.',
			),
			array(
				'title'       => 'Calm direction',
				'description' => 'Our posing language is quiet and precise, which keeps the experience relaxed without losing polish.',
			),
			array(
				'title'       => 'Human detail',
				'description' => 'We look for the hand-on-shoulder moments, texture in the clothing, and the unscripted pause between poses.',
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

