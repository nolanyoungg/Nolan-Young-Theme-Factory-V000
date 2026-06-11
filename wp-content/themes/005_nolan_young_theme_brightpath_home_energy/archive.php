<?php get_header(); ?>
<section class="section-card archive-grid">
  <h1><?php the_archive_title(); ?></h1>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></article>
  <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>

