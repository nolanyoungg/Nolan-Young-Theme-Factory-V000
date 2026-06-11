<?php get_header(); ?>
<section class="section page-content"><h1><?php the_archive_title(); ?></h1><?php if (have_posts()) : while (have_posts()) : the_post(); ?><article class="post-card"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 24)); ?></p></article><?php endwhile; endif; ?></section>
<?php get_footer(); ?>
