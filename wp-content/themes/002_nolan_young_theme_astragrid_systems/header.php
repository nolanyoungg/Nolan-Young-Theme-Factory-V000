<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', '002_nolan_young_theme_astragrid_systems' ); ?></a>
<header class="site-header">
  <div class="nav-shell">
    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><span class="brand-mark">AG</span><span>AstraGrid Systems</span></a>
    <nav class="desktop-nav" aria-label="<?php esc_attr_e( 'Primary navigation', '002_nolan_young_theme_astragrid_systems' ); ?>">
      <button class="nav-trigger" data-menu-item="services" aria-expanded="false" aria-controls="menu-services">Services</button>
      <button class="nav-trigger" data-menu-item="about" aria-expanded="false" aria-controls="menu-about">About</button>
      <a class="nav-link" href="<?php echo esc_url( home_url( '/work/' ) ); ?>">Work</a>
      <button class="nav-trigger" data-menu-item="blog" aria-expanded="false" aria-controls="menu-blog">Blog</button>
    </nav>
    <a class="button header-cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a>
    <button class="mobile-toggle" data-mobile-open aria-expanded="false" aria-controls="mobile-drawer">Menu</button>
  </div>
  <?php get_template_part( 'template-parts/content', 'menu-panels' ); ?>
</header>
<div class="menu-backdrop" data-menu-backdrop></div>
<?php get_template_part( 'template-parts/content', 'mobile-drawer' ); ?>
<main id="main-content">