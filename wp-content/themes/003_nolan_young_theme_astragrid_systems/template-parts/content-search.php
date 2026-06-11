<?php if ( have_posts() ) : ?>
	<div class="grid-2">
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="card"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><?php the_excerpt(); ?></article>
		<?php endwhile; ?>
	</div>
<?php else : ?>
	<?php get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>
