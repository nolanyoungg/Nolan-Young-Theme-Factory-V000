<?php get_header(); ?>
<article class="section page-content"><?php while (have_posts()) : the_post(); ?><h1><?php the_title(); ?></h1><?php the_content(); ?><?php comments_template(); endwhile; ?></article>
<?php get_footer(); ?>
