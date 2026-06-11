<?php get_header(); ?>
<?php /* Homepage template parts: content-home-hero content-home-services content-home-work content-home-process content-home-testimonials content-home-cta. */ ?>
<?php get_template_part('template-parts/content', 'home-hero'); ?>
<section class="section band"><div class="shell two grid"><div><p class="eyebrow">Problem</p><h2>Your team is not slow. The operating system around the team is fragmented.</h2><p class="lede">AstraGrid finds the spreadsheet detours, repeated decisions, missing data contracts, and hidden queues that keep good teams reactive.</p></div><div class="visual-card"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/workflow-routing-diagram.svg'); ?>" alt="Workflow routing diagram"></div></div></section>
<?php get_template_part('template-parts/content', 'home-services'); ?>
<?php get_template_part('template-parts/content', 'home-work'); ?>
<?php get_template_part('template-parts/content', 'home-process'); ?>
<section class="section"><div class="shell grid four"><article class="card"><h3>Sharp scope</h3><p>Every release has visible limits, owners, and acceptance checks.</p></article><article class="card"><h3>Clean data</h3><p>Dashboards start with source trust, field rules, and stable naming.</p></article><article class="card"><h3>Human approval</h3><p>AI assistance supports decisions without hiding accountability.</p></article><article class="card"><h3>Supportable launch</h3><p>Documentation and review rituals keep the system useful.</p></article></div></section>
<?php get_template_part('template-parts/content', 'home-testimonials'); ?>
<section class="section"><div class="shell"><p class="eyebrow">FAQ</p><div class="grid three"><article class="card"><h3>Can you work with messy CRM data?</h3><p>Yes. Cleanup, mapping, and lifecycle repair are often the first release.</p></article><article class="card"><h3>Do you build custom dashboards?</h3><p>Yes. We design dashboards around decisions, not decorative charts.</p></article><article class="card"><h3>Can WordPress connect to internal systems?</h3><p>Yes. We build safe form, intake, content, and reporting integrations.</p></article></div></div></section>
<?php get_template_part('template-parts/content', 'home-cta'); ?>
<?php get_footer(); ?>
