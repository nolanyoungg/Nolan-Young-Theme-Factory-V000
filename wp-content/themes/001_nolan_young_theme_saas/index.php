<?php get_header(); ?>
<section class="section page-content"><h1><?php esc_html_e('SignalForge Journal', 'nolan-young-saas'); ?></h1><?php if (have_posts()) : while (have_posts()) : the_post(); ?><article class="post-card"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 28)); ?></p></article><?php endwhile; the_posts_pagination(); else : get_template_part('template-parts/content', 'none'); endif; ?></section>
<?php get_footer(); ?>
