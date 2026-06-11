<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="section">
    <div class="section-inner two-column">
        <article class="story-panel reveal">
            <span class="eyebrow"><?php esc_html_e('Contact', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('Tell the hotel what kind of stay or event you are planning.', LH_THEME_SLUG); ?></h2>
            <p class="section-copy"><?php esc_html_e('Use the form for room reservations, private dining, wellness requests, intimate weddings, and concierge planning. The response usually arrives within 24 hours.', LH_THEME_SLUG); ?></p>
        </article>
        <article class="story-panel reveal">
            <form class="contact-form" action="<?php echo esc_url(home_url('/contact/')); ?>" method="post">
                <label><span><?php esc_html_e('Name', LH_THEME_SLUG); ?></span><input type="text" name="name"></label>
                <label><span><?php esc_html_e('Email', LH_THEME_SLUG); ?></span><input type="email" name="email"></label>
                <label><span><?php esc_html_e('Phone', LH_THEME_SLUG); ?></span><input type="tel" name="phone"></label>
                <label><span><?php esc_html_e('Inquiry type', LH_THEME_SLUG); ?></span>
                    <select name="type">
                        <option><?php esc_html_e('Room reservation', LH_THEME_SLUG); ?></option>
                        <option><?php esc_html_e('Dining request', LH_THEME_SLUG); ?></option>
                        <option><?php esc_html_e('Wedding or event', LH_THEME_SLUG); ?></option>
                        <option><?php esc_html_e('Local itinerary', LH_THEME_SLUG); ?></option>
                    </select>
                </label>
                <label><span><?php esc_html_e('Message', LH_THEME_SLUG); ?></span><textarea name="message" rows="5"></textarea></label>
                <button class="button button--primary" type="submit"><?php esc_html_e('Send inquiry', LH_THEME_SLUG); ?></button>
            </form>
        </article>
    </div>
</section>

