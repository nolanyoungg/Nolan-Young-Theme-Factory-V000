<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="section">
    <div class="section-inner">
        <div class="section-head">
            <span class="eyebrow"><?php esc_html_e('Search Results', LH_THEME_SLUG); ?></span>
            <h1 class="section-title"><?php printf(esc_html__('Search results for %s', LH_THEME_SLUG), esc_html(get_search_query())); ?></h1>
        </div>
        <?php if (have_posts()) : ?>
            <div class="grid-cards">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="card" style="grid-column: span 6;">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 30)); ?></p>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e('No matching results were found.', LH_THEME_SLUG); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer();

