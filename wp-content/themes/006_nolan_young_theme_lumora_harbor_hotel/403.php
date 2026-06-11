<?php
if (!defined('ABSPATH')) {
    exit;
}
status_header(403);
get_header();
?>
<section class="section">
    <div class="section-inner">
        <article class="story-panel">
            <div class="section-head">
                <span class="eyebrow"><?php esc_html_e('Access Restricted', LH_THEME_SLUG); ?></span>
                <h1 class="section-title"><?php esc_html_e('That page is reserved for hotel staff or secure requests.', LH_THEME_SLUG); ?></h1>
                <p class="section-copy"><?php esc_html_e('If you meant to reach a public page, use the primary navigation or book direct from the contact page.', LH_THEME_SLUG); ?></p>
            </div>
            <a class="button button--primary" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Book Direct', LH_THEME_SLUG); ?></a>
        </article>
    </div>
</section>
<?php get_footer();

