<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="section">
    <div class="section-inner two-column">
        <article class="story-panel reveal">
            <span class="eyebrow"><?php esc_html_e('Services hero', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('Clear hotel offerings with a direct path to booking.', LH_THEME_SLUG); ?></h2>
            <p class="section-copy"><?php esc_html_e('The services template leads with the stays, dining, and planning support that matter most to a refined waterfront hotel guest.', LH_THEME_SLUG); ?></p>
            <a class="button button--primary" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Book direct', LH_THEME_SLUG); ?></a>
        </article>
        <article class="story-panel reveal">
            <h3><?php esc_html_e('Quick overview', LH_THEME_SLUG); ?></h3>
            <ul class="footer-links">
                <li><?php esc_html_e('Rooms and suites with clear upgrade notes', LH_THEME_SLUG); ?></li>
                <li><?php esc_html_e('Dining, wellness, and seasonal stay rituals', LH_THEME_SLUG); ?></li>
                <li><?php esc_html_e('Events, retreats, and private dining support', LH_THEME_SLUG); ?></li>
                <li><?php esc_html_e('Useful FAQ and arrival guidance', LH_THEME_SLUG); ?></li>
            </ul>
        </article>
    </div>
</section>

