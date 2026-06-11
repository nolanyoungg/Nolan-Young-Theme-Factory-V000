<?php
if (!defined('ABSPATH')) {
    exit;
}
$data = lumora_harbor_site_data();
?>
</main>
<footer class="site-footer">
    <div class="site-footer__inner">
        <div class="site-footer__intro">
            <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo lumora_harbor_icon_mark(); ?>
                <span class="brand__text">
                    <span class="brand__eyebrow"><?php echo esc_html($data['brand']['display']); ?></span>
                    <span class="brand__name"><?php echo esc_html($data['brand']['name']); ?></span>
                </span>
            </a>
            <p class="section-copy"><?php echo esc_html($data['brand']['tagline']); ?></p>
            <div class="footer-cta">
                <strong><?php esc_html_e('Book direct for the best room guidance, flexible planning support, and arrival notes tailored to your stay.', LH_THEME_SLUG); ?></strong>
                <p><?php esc_html_e('Concierge response time is typically within 24 hours on stays, dining, and event inquiries.', LH_THEME_SLUG); ?></p>
                <a class="button button--primary" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Book Direct', LH_THEME_SLUG); ?></a>
            </div>
        </div>
        <div class="site-footer__grid">
            <div>
                <h3><?php esc_html_e('Explore', LH_THEME_SLUG); ?></h3>
                <nav class="footer-links" aria-label="<?php esc_attr_e('Footer main', LH_THEME_SLUG); ?>">
                    <a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Stay', LH_THEME_SLUG); ?></a>
                    <a href="<?php echo esc_url(home_url('/about-us/')); ?>"><?php esc_html_e('About', LH_THEME_SLUG); ?></a>
                    <a href="<?php echo esc_url(home_url('/work/')); ?>"><?php esc_html_e('Work', LH_THEME_SLUG); ?></a>
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>"><?php esc_html_e('Blog', LH_THEME_SLUG); ?></a>
                </nav>
            </div>
            <div>
                <h3><?php esc_html_e('Experiences', LH_THEME_SLUG); ?></h3>
                <nav class="footer-links" aria-label="<?php esc_attr_e('Footer services', LH_THEME_SLUG); ?>">
                    <a href="<?php echo esc_url(home_url('/services/#rooms')); ?>"><?php esc_html_e('Harbor King Rooms', LH_THEME_SLUG); ?></a>
                    <a href="<?php echo esc_url(home_url('/services/#dining')); ?>"><?php esc_html_e('Waterfront Dining', LH_THEME_SLUG); ?></a>
                    <a href="<?php echo esc_url(home_url('/services/#wellness')); ?>"><?php esc_html_e('Spa & Wellness', LH_THEME_SLUG); ?></a>
                    <a href="<?php echo esc_url(home_url('/services/#packages')); ?>"><?php esc_html_e('Seasonal Packages', LH_THEME_SLUG); ?></a>
                </nav>
            </div>
            <div>
                <h3><?php esc_html_e('Journal', LH_THEME_SLUG); ?></h3>
                <nav class="footer-links" aria-label="<?php esc_attr_e('Footer journal', LH_THEME_SLUG); ?>">
                    <a href="<?php echo esc_url(home_url('/blog/#guide-1')); ?>"><?php esc_html_e('Two-Day Harbor Guide', LH_THEME_SLUG); ?></a>
                    <a href="<?php echo esc_url(home_url('/blog/#guide-2')); ?>"><?php esc_html_e('Packing for a Coastal Weekend', LH_THEME_SLUG); ?></a>
                    <a href="<?php echo esc_url(home_url('/blog/#guide-3')); ?>"><?php esc_html_e('Planning a Small Wedding', LH_THEME_SLUG); ?></a>
                </nav>
            </div>
            <div>
                <h3><?php esc_html_e('Contact', LH_THEME_SLUG); ?></h3>
                <div class="footer-links">
                    <span><?php echo esc_html($data['footer']['address']); ?></span>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $data['footer']['phone'])); ?>"><?php echo esc_html($data['footer']['phone']); ?></a>
                    <a href="mailto:<?php echo esc_attr($data['footer']['email']); ?>"><?php echo esc_html($data['footer']['email']); ?></a>
                </div>
                <form class="newsletter" action="<?php echo esc_url(home_url('/contact/')); ?>" method="get">
                    <label>
                        <span><?php esc_html_e('Join the newsletter', LH_THEME_SLUG); ?></span>
                        <input type="email" name="email" placeholder="<?php esc_attr_e('Email address', LH_THEME_SLUG); ?>">
                    </label>
                    <button class="button button--secondary" type="submit"><?php esc_html_e('Sign up', LH_THEME_SLUG); ?></button>
                </form>
            </div>
        </div>
        <div class="site-footer__meta">
            <span>&copy; <?php echo esc_html(date_i18n('Y')); ?> Lumora Harbor Hotel</span>
            <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>"><?php esc_html_e('Privacy', LH_THEME_SLUG); ?></a>
            <a href="<?php echo esc_url(home_url('/terms/')); ?>"><?php esc_html_e('Terms', LH_THEME_SLUG); ?></a>
            <span><?php esc_html_e('Waterfront hospitality for design-minded travelers and intimate events.', LH_THEME_SLUG); ?></span>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

