<?php get_header(); ?>
<section class="page-content section-card">
  <?php while (have_posts()) : the_post(); ?>
    <article>
      <h1><?php the_title(); ?></h1>
      <div class="rich-copy"><?php the_content(); ?></div>
    </article>
  <?php endwhile; ?>
</section>
<?php get_footer(); ?>

