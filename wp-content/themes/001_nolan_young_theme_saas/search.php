<?php get_header(); ?>
<section class="section page-content"><h1><?php printf(esc_html__('Search results for %s', 'nolan-young-saas'), esc_html(get_search_query())); ?></h1><?php get_search_form(); if (have_posts()) : while (have_posts()) : the_post(); get_template_part('template-parts/content', 'search'); endwhile; else : get_template_part('template-parts/content', 'none'); endif; ?></section>
<?php get_footer(); ?>
