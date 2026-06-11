<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="section">
    <div class="section-inner">
        <?php while (have_posts()) : the_post(); ?>
            <article class="story-panel">
                <div class="section-head">
                    <span class="eyebrow"><?php echo esc_html(get_the_title()); ?></span>
                    <h1 class="section-title"><?php the_title(); ?></h1>
                </div>
                <div class="section-copy">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</section>
<?php get_footer();

