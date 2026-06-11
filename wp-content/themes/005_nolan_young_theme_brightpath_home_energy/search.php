<?php get_header(); ?>
<section class="section-card">
  <h1>Search results</h1>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></article>
  <?php endwhile; else : ?><p>No results found.</p><?php endif; ?>
</section>
<?php get_footer(); ?>

