<?php
if (!defined('ABSPATH')) {
    exit;
}
$data = lumora_harbor_site_data();
$menus = lumora_harbor_menu_data();
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class('site-shell'); ?>>
<?php wp_body_open(); ?>
<a class="sr-only" href="#content"><?php esc_html_e('Skip to content', LH_THEME_SLUG); ?></a>
<div class="menu-backdrop" data-menu-backdrop aria-hidden="true"></div>
<header class="site-header">
    <div class="site-header__inner">
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
            <?php echo lumora_harbor_icon_mark(); ?>
            <span class="brand__text">
                <span class="brand__eyebrow"><?php echo esc_html($data['brand']['display']); ?></span>
                <span class="brand__name"><?php echo esc_html($data['brand']['name']); ?></span>
            </span>
        </a>
        <nav class="site-nav" aria-label="<?php esc_attr_e('Primary', LH_THEME_SLUG); ?>">
            <button class="site-nav__trigger" data-menu-item="services" aria-controls="services-panel" aria-expanded="false" type="button"><?php esc_html_e('Stay', LH_THEME_SLUG); ?></button>
            <button class="site-nav__trigger" data-menu-item="about" aria-controls="about-panel" aria-expanded="false" type="button"><?php esc_html_e('About', LH_THEME_SLUG); ?></button>
            <a class="site-nav__link" href="<?php echo esc_url(home_url('/work/')); ?>"><?php esc_html_e('Work', LH_THEME_SLUG); ?></a>
            <button class="site-nav__trigger" data-menu-item="blog" aria-controls="blog-panel" aria-expanded="false" type="button"><?php esc_html_e('Blog', LH_THEME_SLUG); ?></button>
        </nav>
        <div class="site-header__actions">
            <a class="button button--secondary" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Book Direct', LH_THEME_SLUG); ?></a>
            <button class="button button--primary mobile-toggle" data-mobile-toggle aria-controls="mobile-drawer" aria-expanded="false" type="button"><?php esc_html_e('Menu', LH_THEME_SLUG); ?></button>
        </div>
    </div>
    <div class="menu-panel" id="services-panel" data-menu-dropdown="services" hidden>
        <div class="menu-panel__grid">
            <div class="menu-panel__stack">
                <h3><?php esc_html_e('Stay', LH_THEME_SLUG); ?></h3>
                <p><?php esc_html_e('Choose the right room or package with clear direct-booking guidance and concierge support.', LH_THEME_SLUG); ?></p>
                <div class="menu-card-list">
                    <a class="menu-card" href="<?php echo esc_url(home_url('/services/#rooms')); ?>">
                        <span class="menu-card__visual"><?php echo lumora_harbor_svg_image('harbor-sunrise-suite-balcony.svg', 'Harbor sunrise suite balcony'); ?></span>
                        <span class="menu-card__body">
                            <span class="menu-card__title"><?php esc_html_e('Harbor King Rooms', LH_THEME_SLUG); ?></span>
                            <span class="menu-card__text"><?php esc_html_e('Thoughtful room guidance for couples and short waterfront stays.', LH_THEME_SLUG); ?></span>
                        </span>
                    </a>
                    <a class="menu-card" href="<?php echo esc_url(home_url('/services/#suites')); ?>">
                        <span class="menu-card__visual"><?php echo lumora_harbor_svg_image('suite-terrace-evening.svg', 'Terrace suite at evening harbor light'); ?></span>
                        <span class="menu-card__body">
                            <span class="menu-card__title"><?php esc_html_e('Terrace Suites', LH_THEME_SLUG); ?></span>
                            <span class="menu-card__text"><?php esc_html_e('A more spacious retreat for anniversaries and slower stays.', LH_THEME_SLUG); ?></span>
                        </span>
                    </a>
                </div>
                <a class="button button--ghost" href="<?php echo esc_url(home_url('/services/harbor-king-rooms/')); ?>"><?php esc_html_e('Service details', LH_THEME_SLUG); ?></a>
            </div>
            <div class="menu-panel__rail">
                <div class="menu-rail-buttons" role="tablist" aria-label="<?php esc_attr_e('Stay options', LH_THEME_SLUG); ?>">
                    <button data-rail-item="stay" class="is-active" aria-selected="true" type="button"><?php esc_html_e('Rooms', LH_THEME_SLUG); ?></button>
                    <button data-rail-item="experiences" aria-selected="false" type="button"><?php esc_html_e('Suites', LH_THEME_SLUG); ?></button>
                    <button data-rail-item="events" aria-selected="false" type="button"><?php esc_html_e('Packages', LH_THEME_SLUG); ?></button>
                </div>
                <div class="menu-rail-content">
                    <section data-rail-content="stay" class="is-active">
                        <h3><?php esc_html_e('Book with confidence', LH_THEME_SLUG); ?></h3>
                        <p><?php esc_html_e('View room profiles, compare upgrade notes, and reserve the best fit for your dates.', LH_THEME_SLUG); ?></p>
                        <a class="button button--secondary" href="<?php echo esc_url(home_url('/services/#rooms')); ?>"><?php esc_html_e('Explore rooms', LH_THEME_SLUG); ?></a>
                    </section>
                    <section data-rail-content="experiences" hidden>
                        <h3><?php esc_html_e('More room to unwind', LH_THEME_SLUG); ?></h3>
                        <p><?php esc_html_e('Suites pair harbor views with terrace space, softer pacing, and late arrival ease.', LH_THEME_SLUG); ?></p>
                        <a class="button button--secondary" href="<?php echo esc_url(home_url('/services/#suites')); ?>"><?php esc_html_e('View suites', LH_THEME_SLUG); ?></a>
                    </section>
                    <section data-rail-content="events" hidden>
                        <h3><?php esc_html_e('Seasonal stays', LH_THEME_SLUG); ?></h3>
                        <p><?php esc_html_e('Direct-booking packages for anniversaries, winter escapes, and longer harbor weekends.', LH_THEME_SLUG); ?></p>
                        <a class="button button--secondary" href="<?php echo esc_url(home_url('/services/#packages')); ?>"><?php esc_html_e('See packages', LH_THEME_SLUG); ?></a>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-panel" id="about-panel" data-menu-dropdown="about" hidden>
        <div class="menu-panel__grid">
            <div class="menu-panel__stack">
                <h3><?php esc_html_e('About the hotel', LH_THEME_SLUG); ?></h3>
                <p><?php esc_html_e('Read the story behind the property, the design philosophy, and the hospitality standard.', LH_THEME_SLUG); ?></p>
                <div class="menu-card-list">
                    <a class="menu-card" href="<?php echo esc_url(home_url('/about-us/#story')); ?>">
                        <span class="menu-card__visual"><?php echo lumora_harbor_svg_image('boutique-hotel-lobby-lounge.svg', 'Boutique lobby lounge'); ?></span>
                        <span class="menu-card__body">
                            <span class="menu-card__title"><?php esc_html_e('Harbor story', LH_THEME_SLUG); ?></span>
                            <span class="menu-card__text"><?php esc_html_e('A local, design-minded hotel shaped around warmth and ease.', LH_THEME_SLUG); ?></span>
                        </span>
                    </a>
                    <a class="menu-card" href="<?php echo esc_url(home_url('/about-us/#values')); ?>">
                        <span class="menu-card__visual"><?php echo lumora_harbor_svg_image('concierge-itinerary-board.svg', 'Concierge itinerary board'); ?></span>
                        <span class="menu-card__body">
                            <span class="menu-card__title"><?php esc_html_e('Service values', LH_THEME_SLUG); ?></span>
                            <span class="menu-card__text"><?php esc_html_e('Local sourcing, calm check-in flow, and personal hospitality.', LH_THEME_SLUG); ?></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="menu-rail-content">
                <section data-rail-content="story" class="is-active">
                    <h3><?php esc_html_e('Design philosophy', LH_THEME_SLUG); ?></h3>
                    <p><?php esc_html_e('Warm, cinematic interiors and a site rhythm that feels more like a guest journal than a corporate resort.', LH_THEME_SLUG); ?></p>
                    <a class="button button--secondary" href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php esc_html_e('Read the story', LH_THEME_SLUG); ?></a>
                </section>
            </div>
        </div>
    </div>
    <div class="menu-panel" id="blog-panel" data-menu-dropdown="blog" hidden>
        <div class="menu-panel__grid">
            <div class="menu-panel__stack">
                <h3><?php esc_html_e('Journal', LH_THEME_SLUG); ?></h3>
                <p><?php esc_html_e('Useful guidance for travelers, wedding planners, and guests building a refined harbor weekend.', LH_THEME_SLUG); ?></p>
                <div class="menu-card-list">
                    <a class="menu-card" href="<?php echo esc_url(home_url('/blog/#guide-1')); ?>">
                        <span class="menu-card__visual"><?php echo lumora_harbor_svg_image('local-harbor-guide-card.svg', 'Local harbor guide card'); ?></span>
                        <span class="menu-card__body">
                            <span class="menu-card__title"><?php esc_html_e('Two-day harbor guide', LH_THEME_SLUG); ?></span>
                            <span class="menu-card__text"><?php esc_html_e('What to do, where to eat, and how to pace the stay.', LH_THEME_SLUG); ?></span>
                        </span>
                    </a>
                    <a class="menu-card" href="<?php echo esc_url(home_url('/blog/#guide-2')); ?>">
                        <span class="menu-card__visual"><?php echo lumora_harbor_svg_image('guest-review-postcard.svg', 'Guest review postcard'); ?></span>
                        <span class="menu-card__body">
                            <span class="menu-card__title"><?php esc_html_e('Packing for a coastal weekend', LH_THEME_SLUG); ?></span>
                            <span class="menu-card__text"><?php esc_html_e('Practical packing guidance for coastal weather and dinner plans.', LH_THEME_SLUG); ?></span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="menu-rail-content">
                <section data-rail-content="guides" class="is-active">
                    <h3><?php esc_html_e('Helpful reads', LH_THEME_SLUG); ?></h3>
                    <p><?php esc_html_e('Short, useful articles that help guests arrive prepared and leave inspired.', LH_THEME_SLUG); ?></p>
                    <a class="button button--secondary" href="<?php echo esc_url(home_url('/blog/')); ?>"><?php esc_html_e('Open the journal', LH_THEME_SLUG); ?></a>
                </section>
            </div>
        </div>
    </div>
    <div class="menu-panel" id="mobile-drawer" data-mobile-drawer hidden>
        <div class="menu-panel__stack">
            <h3><?php esc_html_e('Navigate Lumora Harbor Hotel', LH_THEME_SLUG); ?></h3>
            <nav class="footer-links" aria-label="<?php esc_attr_e('Mobile', LH_THEME_SLUG); ?>">
                <a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Stay', LH_THEME_SLUG); ?></a>
                <a href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php esc_html_e('About', LH_THEME_SLUG); ?></a>
                <a href="<?php echo esc_url(home_url('/work/')); ?>"><?php esc_html_e('Work', LH_THEME_SLUG); ?></a>
                <a href="<?php echo esc_url(home_url('/blog/')); ?>"><?php esc_html_e('Blog', LH_THEME_SLUG); ?></a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Contact Us', LH_THEME_SLUG); ?></a>
            </nav>
            <button class="button button--secondary" data-mobile-close type="button"><?php esc_html_e('Close menu', LH_THEME_SLUG); ?></button>
        </div>
    </div>
</header>
<main id="content">
