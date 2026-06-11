<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<article class="story-panel policy-copy">
    <div class="section-head">
        <span class="eyebrow"><?php esc_html_e('Policy', LH_THEME_SLUG); ?></span>
        <h1 class="section-title"><?php the_title(); ?></h1>
    </div>
    <div class="section-copy">
        <?php the_content(); ?>
        <p><?php esc_html_e('Policy content should stay readable and calm. This template keeps the legal language in a clean editorial frame so the page still feels like part of the hotel site instead of a generic compliance block.', LH_THEME_SLUG); ?></p>
        <p><?php esc_html_e('Use this layout for privacy, terms, accessibility statements, or booking policies that need to remain easy to review without breaking the premium tone of the theme.', LH_THEME_SLUG); ?></p>
    </div>
    <ul class="footer-links">
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Contact the hotel', LH_THEME_SLUG); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('View services', LH_THEME_SLUG); ?></a></li>
    </ul>
</article>
