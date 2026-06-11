<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="section">
    <div class="section-inner">
        <div class="section-head">
            <span class="eyebrow"><?php esc_html_e('Journal & Updates', LH_THEME_SLUG); ?></span>
            <h1 class="section-title"><?php esc_html_e('Latest stories from the harbor.', LH_THEME_SLUG); ?></h1>
            <p class="section-copy"><?php esc_html_e('A refined fallback template for blog archives, pages, and any content that needs to feel fully styled and consistent with the hotel brand.', LH_THEME_SLUG); ?></p>
        </div>
        <?php if (have_posts()) : ?>
            <div class="grid-cards">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="card" style="grid-column: span 4;">
                        <div class="card__meta"><?php echo esc_html(get_the_date()); ?></div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 28)); ?></p>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e('No posts are available yet.', LH_THEME_SLUG); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer();

