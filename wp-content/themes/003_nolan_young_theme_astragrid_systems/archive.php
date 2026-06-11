<?php get_header(); ?>
<main id="main-content" class="site-main">
	<section class="page-hero"><div class="shell split"><div class="hero-copy"><p class="eyebrow">Archive</p><h1>Signals, articles, and projects.</h1><p>Use archive templates for the generated project and resource content.</p></div><div class="visual-panel"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/analytics-console.svg' ); ?>" alt="Analytics console"></div></div></section>
	<section class="section"><div class="shell"><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', 'page' ); endwhile; else : get_template_part( 'template-parts/content', 'none' ); endif; ?></div></section>
</main>
<?php get_footer(); ?>
