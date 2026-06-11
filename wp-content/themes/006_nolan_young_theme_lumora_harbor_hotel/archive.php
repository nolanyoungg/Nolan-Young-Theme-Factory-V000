<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="section">
    <div class="section-inner">
        <div class="section-head">
            <span class="eyebrow"><?php esc_html_e('Archive', LH_THEME_SLUG); ?></span>
            <h1 class="section-title"><?php the_archive_title(); ?></h1>
            <p class="section-copy"><?php the_archive_description(); ?></p>
        </div>
        <?php if (have_posts()) : ?>
            <div class="grid-cards">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="card" style="grid-column: span 4;">
                        <div class="card__meta"><?php echo esc_html(get_the_date()); ?></div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 30)); ?></p>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <?php get_template_part('template-parts/content-none'); ?>
        <?php endif; ?>
    </div>
</section>
<?php get_footer();

