<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<section class="section">
    <div class="section-inner">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content-single');
            comments_template();
        endwhile;
        ?>
    </div>
</section>
<?php get_footer();

