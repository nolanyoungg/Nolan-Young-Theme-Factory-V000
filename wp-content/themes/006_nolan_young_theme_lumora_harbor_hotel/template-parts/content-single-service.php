<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="section">
    <div class="section-inner two-column">
        <article class="story-panel reveal">
            <span class="eyebrow"><?php esc_html_e('Service detail', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('A single service page that sells the right choice, not the biggest list.', LH_THEME_SLUG); ?></h2>
            <p class="section-copy"><?php esc_html_e('Use this pattern for a room, dining experience, wellness offer, or event detail page where the guest needs confidence, clarity, and a direct conversion path.', LH_THEME_SLUG); ?></p>
            <a class="button button--primary" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Book direct', LH_THEME_SLUG); ?></a>
        </article>
        <article class="story-panel reveal">
            <h3><?php esc_html_e('Helpful details', LH_THEME_SLUG); ?></h3>
            <ul class="footer-links">
                <li><?php esc_html_e('Audience and use case', LH_THEME_SLUG); ?></li>
                <li><?php esc_html_e('Deliverables and inclusions', LH_THEME_SLUG); ?></li>
                <li><?php esc_html_e('Process and FAQ guidance', LH_THEME_SLUG); ?></li>
                <li><?php esc_html_e('Clear next-step CTA', LH_THEME_SLUG); ?></li>
            </ul>
        </article>
    </div>
</section>

