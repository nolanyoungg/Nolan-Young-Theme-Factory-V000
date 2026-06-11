<?php
/** Header for AstraGrid Systems. */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content"><?php esc_html_e('Skip to content', 'astragrid-systems'); ?></a>
<div class="menu-backdrop" data-menu-backdrop hidden></div>
<header class="site-header" data-site-header>
  <div class="header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="AstraGrid Systems home">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/astragrid-mark.svg'); ?>" alt="" width="42" height="42">
      <span>AstraGrid Systems</span>
    </a>
    <nav class="primary-navigation" aria-label="<?php esc_attr_e('Primary navigation', 'astragrid-systems'); ?>">
      <button class="nav-trigger" type="button" data-menu-item="services" aria-controls="nolan-menu-services" aria-expanded="false">Services</button>
      <button class="nav-trigger" type="button" data-menu-item="about" aria-controls="nolan-menu-about" aria-expanded="false">About Us</button>
      <a class="nav-link" href="<?php echo esc_url(home_url('/work/')); ?>">Work</a>
      <button class="nav-trigger" type="button" data-menu-item="blog" aria-controls="nolan-menu-blog" aria-expanded="false">Blog</button>
    </nav>
    <a class="header-cta" href="<?php echo esc_url(home_url('/contact/')); ?>">Contact Us</a>
    <button class="mobile-open" type="button" data-mobile-open aria-controls="mobile-drawer" aria-expanded="false">Menu</button>
  </div>
  <?php get_template_part('template-parts/content', 'mega-menu'); ?>
  <?php get_template_part('template-parts/content', 'mobile-drawer'); ?>
</header>
<main id="main-content" class="site-main">
