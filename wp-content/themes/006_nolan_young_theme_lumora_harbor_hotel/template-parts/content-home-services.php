<?php
if (!defined('ABSPATH')) {
    exit;
}
$data = lumora_harbor_site_data();
?>
<section class="section">
    <div class="section-inner">
        <div class="section-head reveal">
            <span class="eyebrow"><?php esc_html_e('Rooms, dining, and quiet rituals', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('A complete stay path with clear reasons to book direct.', LH_THEME_SLUG); ?></h2>
            <p class="section-copy"><?php esc_html_e('Rooms are designed around light and texture, while dining and wellness are staged as part of the stay instead of separate add-ons.', LH_THEME_SLUG); ?></p>
        </div>
        <div class="grid-cards">
            <?php foreach ($data['rooms'] as $room) : ?>
                <article class="card card--visual reveal" data-visual="suite" style="grid-column: span 4;">
                    <div class="card__meta">
                        <span><?php echo esc_html($room['meta']); ?></span>
                    </div>
                    <h3><?php echo esc_html($room['title']); ?></h3>
                    <p><?php echo esc_html($room['excerpt']); ?></p>
                    <p><a class="button button--ghost" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Book this stay style', LH_THEME_SLUG); ?></a></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="section section--soft">
    <div class="section-inner two-column">
        <article class="story-panel reveal">
            <span class="eyebrow"><?php esc_html_e('Harbor story', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('The property feels local, luminous, and intentionally paced.', LH_THEME_SLUG); ?></h2>
            <p class="section-copy"><?php esc_html_e('Arrival is calm and clear. The lobby, terraces, and dining spaces carry the same editorial mood as the site, with soft color, room to breathe, and guest support that never feels rushed.', LH_THEME_SLUG); ?></p>
            <a class="button button--secondary" href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php esc_html_e('Read the hotel story', LH_THEME_SLUG); ?></a>
        </article>
        <div class="story-panel__visual reveal" aria-label="<?php esc_attr_e('Local harbor map illustration', LH_THEME_SLUG); ?>"></div>
    </div>
</section>
<section class="section">
    <div class="section-inner">
        <div class="section-head reveal">
            <span class="eyebrow"><?php esc_html_e('Dining and wellness', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('Two essential hospitality rituals, designed to feel seamless together.', LH_THEME_SLUG); ?></h2>
        </div>
        <div class="grid-cards">
            <?php foreach ($data['experience_panels'] as $panel) : ?>
                <article class="card card--visual reveal" data-visual="<?php echo esc_attr($panel['visual']); ?>" style="grid-column: span 4;">
                    <div class="card__meta"><span><?php echo esc_html($panel['title']); ?></span></div>
                    <h3><?php echo esc_html($panel['title']); ?></h3>
                    <p><?php echo esc_html($panel['copy']); ?></p>
                    <p><a class="button button--ghost" href="<?php echo esc_url($panel['link']); ?>"><?php esc_html_e('Learn more', LH_THEME_SLUG); ?></a></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

