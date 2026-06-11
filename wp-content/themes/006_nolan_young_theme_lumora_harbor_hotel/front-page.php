<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header();
?>
<div class="front-page">
    <?php get_template_part('template-parts/content-home-hero'); ?>
    <?php get_template_part('template-parts/content-home-services'); ?>
    <?php get_template_part('template-parts/content-home-work'); ?>
    <?php get_template_part('template-parts/content-home-process'); ?>
    <?php get_template_part('template-parts/content-home-testimonials'); ?>
    <?php get_template_part('template-parts/content-home-cta'); ?>
</div>
<?php
get_footer();

