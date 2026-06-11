<?php
// content-home-hero content-home-services content-home-work content-home-process content-home-testimonials content-home-cta
get_template_part( 'template-parts/content', 'home-hero' );
get_template_part( 'template-parts/content', 'brand-statement' );
get_template_part( 'template-parts/content', 'home-services' );
get_template_part( 'template-parts/content', 'home-process' );
get_template_part( 'template-parts/content', 'home-work' );
get_template_part( 'template-parts/content', 'style-pillars' );
get_template_part( 'template-parts/content', 'home-testimonials' );
get_template_part( 'template-parts/content', 'blog-preview' );
?>
<section class="section">
	<div class="shell">
		<div class="section-head">
			<p class="eyebrow">FAQ</p>
			<h2>Answers for teams that want the scope clear before the first call.</h2>
			<p class="lede">AstraGrid keeps the early conversation grounded in process, data, and support.</p>
		</div>
		<div class="faq-grid">
			<article class="faq-item"><details><summary>How do you choose the first automation?</summary><p>We pick the path that repeats most often, creates the most follow-up, or breaks the dashboard the hardest.</p></details></article>
			<article class="faq-item"><details><summary>Can you work with our existing CRM?</summary><p>Yes. We usually repair the source records and field logic before suggesting a rebuild.</p></details></article>
			<article class="faq-item"><details><summary>Will the team be able to own the system?</summary><p>That is the goal. Every launch includes notes, owner names, and a maintenance path the operations team can follow.</p></details></article>
			<article class="faq-item"><details><summary>Do you support WordPress integrations?</summary><p>Yes. We connect sites to intake, reporting, and back-office systems without introducing CDN dependencies or remote scripts.</p></details></article>
		</div>
	</div>
</section>
<?php get_template_part( 'template-parts/content', 'home-cta' ); ?>
