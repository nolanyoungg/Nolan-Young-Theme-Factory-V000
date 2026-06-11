<?php
/*
Template Name: About Us
*/
if (!defined('ABSPATH')) {
    exit;
}
get_header();
get_template_part('template-parts/content-hero');
get_template_part('template-parts/content-brand-statement');
get_template_part('template-parts/content-style-pillars');
get_template_part('template-parts/content-testimonials');
get_template_part('template-parts/content-cta-banner');
get_footer();

