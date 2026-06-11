<div class="footer-top">
	<div class="footer-brand">
		<p class="eyebrow">AstraGrid Systems</p>
		<h2>Move work out of spreadsheets and into a cleaner operating system.</h2>
		<p>We build premium automation, analytics, and internal tools for teams that need sharper decisions and steadier weekly operations.</p>
	</div>
	<div>
		<p class="eyebrow">Services</p>
		<div class="footer-links">
			<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">AI Workflow Automation</a>
			<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Custom Dashboards</a>
			<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Internal Tools</a>
			<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Reporting Systems</a>
		</div>
	</div>
	<div>
		<p class="eyebrow">Company</p>
		<div class="footer-links">
			<a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a>
			<a href="<?php echo esc_url( home_url( '/work/' ) ); ?>">Work</a>
			<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
		</div>
	</div>
	<div class="footer-contact">
		<p class="eyebrow">Contact</p>
		<p>New project? Send the rough process, current stack, and the metric that matters most.</p>
		<a href="mailto:hello@astragrid.systems">hello@astragrid.systems</a><br>
		<a href="tel:+14155550118">+1 (415) 555-0118</a>
		<form class="newsletter" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post">
			<input type="hidden" name="action" value="astragrid_newsletter">
			<?php wp_nonce_field( 'astragrid_newsletter', 'astragrid_newsletter_nonce' ); ?>
			<label>
				<span>Mini inquiry / newsletter</span>
			<input type="email" name="email" aria-label="Email address" required>
			</label>
			<button class="button" type="submit">Get a project reply</button>
		</form>
	</div>
</div>
