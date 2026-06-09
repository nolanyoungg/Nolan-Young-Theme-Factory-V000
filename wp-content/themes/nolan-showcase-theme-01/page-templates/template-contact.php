<?php
/**
 * Template Name: Contact
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>
<section class="section">
	<div class="container contact-grid">
		<div class="contact-copy">
			<?php nolan_section_header( __( 'Contact', 'nolan-showcase-theme-01' ), __( 'Start with a date and a sense of what you need.', 'nolan-showcase-theme-01' ), __( 'The studio replies with availability, session guidance, and a recommendation for the most effective format.', 'nolan-showcase-theme-01' ) ); ?>
			<div class="contact-details">
				<p><strong><?php esc_html_e( 'Email', 'nolan-showcase-theme-01' ); ?></strong> hello@rowanvalestudio.com</p>
				<p><strong><?php esc_html_e( 'Service area', 'nolan-showcase-theme-01' ); ?></strong> Boston, New York, and select destinations</p>
				<p><strong><?php esc_html_e( 'Typical response time', 'nolan-showcase-theme-01' ); ?></strong> within 1 business day</p>
			</div>
		</div>
		<div class="contact-panel">
			<form class="contact-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
				<input type="hidden" name="action" value="nolan_contact">
				<?php wp_nonce_field( 'nolan_contact', 'nolan_contact_nonce' ); ?>
				<label>
					<span><?php esc_html_e( 'Your name', 'nolan-showcase-theme-01' ); ?></span>
					<input type="text" name="contact_name" required>
				</label>
				<label>
					<span><?php esc_html_e( 'Email address', 'nolan-showcase-theme-01' ); ?></span>
					<input type="email" name="contact_email" required>
				</label>
				<label>
					<span><?php esc_html_e( 'Project type', 'nolan-showcase-theme-01' ); ?></span>
					<input type="text" name="contact_project" placeholder="<?php echo esc_attr__( 'Brand session, wedding, campaign, or family portrait', 'nolan-showcase-theme-01' ); ?>">
				</label>
				<label>
					<span><?php esc_html_e( 'Tell us about your session', 'nolan-showcase-theme-01' ); ?></span>
					<textarea name="contact_message" rows="5" required></textarea>
				</label>
				<button class="button button--primary" type="submit"><?php esc_html_e( 'Send inquiry', 'nolan-showcase-theme-01' ); ?></button>
			</form>
		</div>
	</div>
</section>
<section class="section">
	<?php get_template_part( 'template-parts/content', 'cta-banner' ); ?>
</section>
<?php
get_footer();

