<section class="page-hero">
	<div class="shell split">
		<div class="hero-copy">
			<p class="eyebrow">Contact</p>
			<h1>Tell us where the work is getting stuck.</h1>
			<p>Use the form to share the current tools, the repeat process, and the result you want the team to trust by the next review cycle.</p>
		</div>
		<div class="visual-panel"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/assistant-panel.svg' ); ?>" alt="Assistant panel"></div>
	</div>
</section>
<section class="section" id="contact-form">
	<div class="shell grid-2">
		<form class="contact-form contact-card" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
			<p class="eyebrow">Inquiry form</p>
			<h2>Start the scope</h2>
			<input type="hidden" name="action" value="astragrid_contact">
			<?php wp_nonce_field( 'astragrid_contact', 'astragrid_contact_nonce' ); ?>
			<div class="form-grid">
				<label><span>Name</span><input type="text" name="name" required></label>
				<label><span>Email</span><input type="email" name="email" required></label>
				<label><span>Company</span><input type="text" name="company"></label>
				<label><span>Website</span><input type="url" name="website"></label>
				<label><span>Service type</span><select name="service"><option>AI Workflow Automation</option><option>Custom Dashboards</option><option>Internal Tools</option><option>CRM & Data Cleanup</option><option>WordPress Integrations</option><option>Reporting Systems</option></select></label>
				<label><span>Budget range</span><select name="budget"><option>Under $10k</option><option>$10k-$25k</option><option>$25k-$50k</option><option>$50k+</option></select></label>
				<label><span>Timeline</span><select name="timeline"><option>As soon as possible</option><option>Within 30 days</option><option>1-3 months</option><option>3+ months</option></select></label>
				<label><span>Message</span><textarea name="message" required></textarea></label>
			</div>
			<button class="button" type="submit">Send the inquiry</button>
		</form>
		<div class="support-callout">
			<article class="contact-card"><p class="eyebrow">What to include</p><h3>Process, tools, and the metric that matters</h3><p>Share the current stack, where the workflow stalls, and what the team needs to see more clearly.</p></article>
			<article class="contact-card"><p class="eyebrow">Contact</p><h3>AstraGrid Systems</h3><p><a href="mailto:hello@astragrid.systems">hello@astragrid.systems</a><br><a href="tel:+14155550118">+1 (415) 555-0118</a></p></article>
			<article class="contact-card"><p class="eyebrow">Expectations</p><h3>How we work</h3><p>We start with scope, build a clear system map, and keep the release path short and explicit.</p></article>
			<article class="contact-card"><p class="eyebrow">FAQ</p><h3>Will you work with our existing stack?</h3><p>Usually yes. We prefer to improve the current system before proposing a full rebuild.</p></article>
		</div>
	</div>
</section>
