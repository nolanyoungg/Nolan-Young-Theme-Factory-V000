<?php get_header(); ?>
<main id="main-content" class="site-main">
	<section class="page-hero"><div class="shell split"><div class="hero-copy"><p class="eyebrow">Search</p><h1>Search results</h1><p>Find articles, projects, and page content quickly.</p></div><div class="visual-panel"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/terminal-card.svg' ); ?>" alt="Terminal card"></div></div></section>
	<section class="section"><div class="shell"><?php get_template_part( 'template-parts/content', 'search' ); ?></div></section>
</main>
<?php get_footer(); ?>
