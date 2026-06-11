<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="section">
    <div class="section-inner">
        <article class="story-panel">
            <div class="section-head">
                <span class="eyebrow"><?php esc_html_e('Not Found', LH_THEME_SLUG); ?></span>
                <h1 class="section-title"><?php esc_html_e('This harbor path is unavailable.', LH_THEME_SLUG); ?></h1>
                <p class="section-copy"><?php esc_html_e('Use the main navigation to return to rooms, services, work, or the journal.', LH_THEME_SLUG); ?></p>
            </div>
            <a class="button button--primary" href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Return home', LH_THEME_SLUG); ?></a>
        </article>
    </div>
</section>
<?php get_footer();

