<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<article class="story-panel">
    <div class="section-head">
        <span class="eyebrow"><?php echo esc_html(get_the_title()); ?></span>
        <h1 class="section-title"><?php the_title(); ?></h1>
    </div>
    <div class="section-copy">
        <?php the_content(); ?>
        <p><?php esc_html_e('This template keeps longer pages aligned with the hotel visual system: generous spacing, readable line lengths, and a clear path back to booking or the main hospitality pages.', LH_THEME_SLUG); ?></p>
        <p><?php esc_html_e('It is intended as a dependable fallback for policy pages, landing pages, and any editorial content that should still feel intentional inside the hotel brand.', LH_THEME_SLUG); ?></p>
    </div>
    <div class="footer-links" aria-label="<?php esc_attr_e('Related links', LH_THEME_SLUG); ?>">
        <a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Explore services', LH_THEME_SLUG); ?></a>
        <a href="<?php echo esc_url(home_url('/work/')); ?>"><?php esc_html_e('Read guest scenarios', LH_THEME_SLUG); ?></a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Book direct', LH_THEME_SLUG); ?></a>
    </div>
</article>
