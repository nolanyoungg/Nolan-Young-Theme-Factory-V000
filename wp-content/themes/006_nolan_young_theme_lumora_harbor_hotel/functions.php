<?php
if (!defined('ABSPATH')) {
    exit;
}

define('LH_THEME_SLUG', '006_nolan_young_theme_lumora_harbor_hotel');
define('LH_THEME_NAME', 'Nolan Young Theme 006 - Lumora Harbor Hotel');

function lumora_harbor_theme_setup(): void {
    load_theme_textdomain(LH_THEME_SLUG, get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_theme_support('custom-logo', [
        'height' => 72,
        'width' => 72,
        'flex-height' => true,
        'flex-width' => true,
    ]);

    register_nav_menus([
        'primary' => __('Primary Navigation', LH_THEME_SLUG),
        'footer' => __('Footer Navigation', LH_THEME_SLUG),
    ]);
}
add_action('after_setup_theme', 'lumora_harbor_theme_setup');

function lumora_harbor_asset_version(string $relative_path): string {
    $path = get_theme_file_path($relative_path);
    return file_exists($path) ? (string) filemtime($path) : wp_get_theme()->get('Version');
}

function lumora_harbor_enqueue_assets(): void {
    $css_rel = file_exists(get_theme_file_path('assets/css/bundle.css')) ? 'assets/css/bundle.css' : 'assets/css/theme.css';
    $js_rel = file_exists(get_theme_file_path('assets/js/bundle.js')) ? 'assets/js/bundle.js' : 'assets/js/theme.js';

    wp_enqueue_style('lumora-harbor-theme', get_theme_file_uri($css_rel), [], lumora_harbor_asset_version($css_rel));
    wp_enqueue_script('lumora-harbor-theme', get_theme_file_uri($js_rel), [], lumora_harbor_asset_version($js_rel), true);
}
add_action('wp_enqueue_scripts', 'lumora_harbor_enqueue_assets');

function lumora_harbor_asset(string $relative_path): string {
    return get_theme_file_uri($relative_path);
}

function lumora_harbor_site_data(): array {
    return [
        'brand' => [
            'name' => 'Lumora Harbor Hotel',
            'display' => LH_THEME_NAME,
            'tagline' => 'Waterfront stays, intimate events, and quiet luxury on the harbor.',
        ],
        'stats' => [
            ['value' => '4.9/5', 'label' => 'Guest rating across direct-booked stays'],
            ['value' => '24 hrs', 'label' => 'Concierge response time for stays and events'],
            ['value' => '12', 'label' => 'Curated room, suite, and package scenarios'],
            ['value' => 'Local', 'label' => 'Dining, sourcing, and itinerary partnerships'],
        ],
        'rooms' => [
            [
                'title' => 'Harbor King Rooms',
                'meta' => 'For couples and short design-focused stays',
                'excerpt' => 'Bright corner rooms with window seats, quiet reading corners, and harbor light that changes by the hour.',
                'image' => 'king-suite-interior-card.svg',
            ],
            [
                'title' => 'Terrace Suites',
                'meta' => 'For anniversaries, upgrades, and longer retreats',
                'excerpt' => 'Layered lounge space, a private terrace outlook, and an easy path from arrival to unwind mode.',
                'image' => 'harbor-sunrise-suite-balcony.svg',
            ],
            [
                'title' => 'Family Suite Stays',
                'meta' => 'For small families and multi-night harbor weekends',
                'excerpt' => 'A more generous floor plan with flexible sleeping arrangements, storage, and a calmer pace for shared travel.',
                'image' => 'suite-family-harbor-view.svg',
            ],
        ],
        'experience_panels' => [
            [
                'title' => 'Waterfront Dining',
                'copy' => 'Seasonal plates, morning coffee rituals, and a dining room framed by glass, candlelight, and the harbor.',
                'visual' => 'dining',
                'link' => '/services/#dining',
            ],
            [
                'title' => 'Spa & Wellness',
                'copy' => 'Slow mornings, in-room rituals, wellness appointments, and a schedule that leaves space to breathe.',
                'visual' => 'spa',
                'link' => '/services/#wellness',
            ],
            [
                'title' => 'Weddings & Private Events',
                'copy' => 'Intimate terrace ceremonies, private dinners, and planning support that keeps every detail crisp.',
                'visual' => 'wedding',
                'link' => '/work/#weddings',
            ],
        ],
        'work' => [
            [
                'title' => 'Anniversary terrace weekend',
                'goal' => 'A two-night surprise with sunset timing, late check-out, and one ideal dinner reservation.',
                'result' => 'The suite became the anchor for a celebratory weekend with a coastal pace and no logistical friction.',
                'services' => 'Terrace Suite, private dining, and concierge itinerary support',
            ],
            [
                'title' => 'Executive harbor retreat',
                'goal' => 'A focused offsite for a small leadership team that still felt restorative.',
                'result' => 'The team left with decisions made, one dinner story people kept referencing, and no wasted downtime.',
                'services' => 'Meeting room, breakout coffee service, and room block coordination',
            ],
            [
                'title' => 'Intimate wedding dinner',
                'goal' => 'A warm gathering for family and a small circle of friends after a harbor ceremony.',
                'result' => 'The evening read as elegant, personal, and deeply local without ever feeling overproduced.',
                'services' => 'Private dining, floral set-up, and suite hold for the couple',
            ],
        ],
        'faq' => [
            ['question' => 'How does direct booking change the stay?', 'answer' => 'Direct booking keeps the concierge team aligned with arrival notes, upgrade opportunities, and the most flexible planning path.'],
            ['question' => 'Is parking available on site?', 'answer' => 'Yes. Valet and self-park options are outlined during confirmation so arrival is simple and predictable.'],
            ['question' => 'Can small events be planned without a ballroom feel?', 'answer' => 'Yes. The property is structured around intimate terraces, private dining, and room-based hospitality rather than oversized event halls.'],
            ['question' => 'What if my plans shift after I book?', 'answer' => 'The team will guide you through the most practical adjustment options based on your room type, package, and event timeline.'],
        ],
        'journal' => [
            ['title' => 'Two perfect days on the harbor', 'text' => 'A practical but atmospheric guide to arrival, dining, wandering, and the best time to slow down.', 'link' => '/blog/#guide-1'],
            ['title' => 'What to ask before booking a boutique hotel', 'text' => 'A clear planning checklist for room type, view priority, arrival support, and direct booking benefits.', 'link' => '/blog/#guide-2'],
            ['title' => 'How to plan a small waterfront wedding', 'text' => 'A calm, detailed look at capacity, timing, terrace flow, and guest experience decisions that matter.', 'link' => '/blog/#guide-3'],
        ],
        'footer' => [
            'address' => '38 Harbor Lane, Lumora Point, Coastal District',
            'phone' => '+1 (555) 204-2188',
            'email' => 'stay@lumoraharborhotel.test',
        ],
    ];
}

function lumora_harbor_menu_data(): array {
    return [
        'services' => [
            'label' => 'Stay',
            'link' => '/services/',
            'dropdown_id' => 'services-panel',
            'rail' => [
                'stay' => [
                    'title' => 'Harbor King Rooms',
                    'description' => 'Clear room-selection guidance for couples, solo travelers, and short premium stays.',
                    'link' => '/services/#rooms',
                ],
                'experiences' => [
                    'title' => 'Terrace Suites',
                    'description' => 'A quiet upgrade path for longer stays, anniversaries, and direct-booking guests.',
                    'link' => '/services/#suites',
                ],
                'events' => [
                    'title' => 'Weekend Packages',
                    'description' => 'A direct view of packages, dining extras, and the best moments to reserve early.',
                    'link' => '/services/#packages',
                ],
            ],
        ],
        'about' => [
            'label' => 'About',
            'link' => '/about-us/',
            'dropdown_id' => 'about-panel',
            'rail' => [
                'story' => [
                    'title' => 'Harbor story',
                    'description' => 'Property story, design intent, and why the brand feels personal instead of corporate.',
                    'link' => '/about-us/#story',
                ],
                'values' => [
                    'title' => 'Service values',
                    'description' => 'Hospitality standards, local sourcing, and the service rhythm behind the guest experience.',
                    'link' => '/about-us/#values',
                ],
                'arrival' => [
                    'title' => 'Concierge support',
                    'description' => 'Arrival expectations, response-time promise, and what guests can ask before they arrive.',
                    'link' => '/about-us/#concierge',
                ],
            ],
        ],
        'blog' => [
            'label' => 'Blog',
            'link' => '/blog/',
            'dropdown_id' => 'blog-panel',
            'rail' => [
                'guides' => [
                    'title' => 'Two-day harbor guide',
                    'description' => 'A guest-friendly, local-first guide for a refined weekend itinerary.',
                    'link' => '/blog/#guide-1',
                ],
                'packing' => [
                    'title' => 'Packing for a coastal weekend',
                    'description' => 'Seasonal recommendations, arrival notes, and practical packing expectations.',
                    'link' => '/blog/#guide-2',
                ],
                'weddings' => [
                    'title' => 'Planning a small wedding',
                    'description' => 'A planning article tuned for intimate ceremonies and private dinners.',
                    'link' => '/blog/#guide-3',
                ],
            ],
        ],
    ];
}

function lumora_harbor_section_links(array $items): string {
    $html = '';
    foreach ($items as $item) {
        $html .= sprintf(
            '<a class="button button--ghost" href="%s">%s</a>',
            esc_url($item['link']),
            esc_html($item['title'])
        );
    }
    return $html;
}

function lumora_harbor_svg_image(string $file, string $alt = ''): string {
    return sprintf(
        '<img src="%s" alt="%s" loading="lazy" decoding="async">',
        esc_url(lumora_harbor_asset('assets/images/' . $file)),
        esc_attr($alt)
    );
}

function lumora_harbor_icon_mark(): string {
    return '<span class="brand__mark" aria-hidden="true"></span>';
}

