<?php get_header(); ?>
<?php
$sections = array(
  array('slug' => 'home-hero', 'file' => 'template-parts/content-home-hero.php'),
  array('slug' => 'home-services', 'file' => 'template-parts/content-home-services.php'),
  array('slug' => 'home-problem', 'file' => 'template-parts/content-home-problem.php'),
  array('slug' => 'home-process', 'file' => 'template-parts/content-home-process.php'),
  array('slug' => 'home-work', 'file' => 'template-parts/content-home-work.php'),
  array('slug' => 'home-proof', 'file' => 'template-parts/content-home-testimonials.php'),
  array('slug' => 'home-resources', 'file' => 'template-parts/content-home-resources.php'),
  array('slug' => 'home-faq', 'file' => 'template-parts/content-home-faq.php'),
  array('slug' => 'home-cta', 'file' => 'template-parts/content-home-cta.php'),
);
foreach ($sections as $section) {
  set_query_var('brightpath_section_slug', $section['slug']);
  get_template_part(str_replace('.php', '', $section['file']));
}
?>
<?php get_footer(); ?>
