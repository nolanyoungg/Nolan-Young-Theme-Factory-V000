<?php get_header(); ?>
<main id="main-content" class="site-main">
	<section class="page-hero"><div class="shell split"><div class="hero-copy"><p class="eyebrow">403</p><h1>Access is restricted.</h1><p>Return to the homepage or contact the studio for help.</p><div class="hero-actions"><a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><a class="button-secondary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></div></div><div class="visual-panel"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/assistant-panel.svg' ); ?>" alt="Assistant panel"></div></div></section>
</main>
<?php get_footer(); ?>
