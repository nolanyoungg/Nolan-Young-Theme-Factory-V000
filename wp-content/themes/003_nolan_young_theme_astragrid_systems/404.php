<?php get_header(); ?>
<main id="main-content" class="site-main">
	<section class="page-hero"><div class="shell split"><div class="hero-copy"><p class="eyebrow">404</p><h1>That page is not on the grid.</h1><p>Try the homepage, services, or work archive.</p><div class="hero-actions"><a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><a class="button-secondary" href="<?php echo esc_url( home_url( '/work/' ) ); ?>">Work</a></div></div><div class="visual-panel"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/system-health-monitor.svg' ); ?>" alt="System health monitor"></div></div></section>
</main>
<?php get_footer(); ?>
