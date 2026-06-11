<?php
/*
Template Name: Blog
*/
if (!defined('ABSPATH')) {
    exit;
}
get_header();
get_template_part('template-parts/content-hero');
get_template_part('template-parts/content-blog-preview');
get_template_part('template-parts/content-testimonials');
get_template_part('template-parts/content-cta-banner');
get_footer();

