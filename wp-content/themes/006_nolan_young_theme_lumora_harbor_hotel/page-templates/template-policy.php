<?php
/*
Template Name: Policy
*/
if (!defined('ABSPATH')) {
    exit;
}
get_header();
while (have_posts()) :
    the_post();
    get_template_part('template-parts/content-policy');
endwhile;
get_footer();

