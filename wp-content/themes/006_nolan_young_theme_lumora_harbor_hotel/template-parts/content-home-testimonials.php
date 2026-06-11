<?php
if (!defined('ABSPATH')) {
    exit;
}
$quotes = [
    ['quote' => __('The suite felt calm from the minute we arrived, and the concierge made everything feel easier than expected.', LH_THEME_SLUG), 'name' => __('A. and J., anniversary stay', LH_THEME_SLUG)],
    ['quote' => __('Our executive retreat had enough structure to stay productive and enough atmosphere to feel restorative.', LH_THEME_SLUG), 'name' => __('M. Ortega, operations director', LH_THEME_SLUG)],
    ['quote' => __('We planned a very small wedding dinner here and it somehow felt both personal and polished.', LH_THEME_SLUG), 'name' => __('Priya + Sam, wedding hosts', LH_THEME_SLUG)],
];
?>
<section class="section section--soft">
    <div class="section-inner">
        <div class="section-head reveal">
            <span class="eyebrow"><?php esc_html_e('Guest proof', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('The hotel reads like a trusted local recommendation, not a generic resort ad.', LH_THEME_SLUG); ?></h2>
        </div>
        <div class="testimonial-grid">
            <?php foreach ($quotes as $quote) : ?>
                <article class="testimonial reveal">
                    <blockquote>“<?php echo esc_html($quote['quote']); ?>”</blockquote>
                    <cite><?php echo esc_html($quote['name']); ?></cite>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="section">
    <div class="section-inner two-column">
        <article class="story-panel reveal">
            <span class="eyebrow"><?php esc_html_e('Press-style proof', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('Awarded for hospitality that feels deeply considered.', LH_THEME_SLUG); ?></h2>
            <ul class="footer-links">
                <li><?php esc_html_e('Guest Choice Award, boutique waterfront category', LH_THEME_SLUG); ?></li>
                <li><?php esc_html_e('Local sourcing partner recognized for seasonal menus', LH_THEME_SLUG); ?></li>
                <li><?php esc_html_e('Concierge team praised for direct booking clarity', LH_THEME_SLUG); ?></li>
            </ul>
        </article>
        <article class="story-panel reveal">
            <span class="eyebrow"><?php esc_html_e('Newsletter', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('Useful travel notes, package launches, and harbor planning ideas.', LH_THEME_SLUG); ?></h2>
            <form class="newsletter" action="<?php echo esc_url(home_url('/contact/')); ?>" method="get">
                <label>
                    <span><?php esc_html_e('Email address', LH_THEME_SLUG); ?></span>
                    <input type="email" name="email" placeholder="<?php esc_attr_e('you@example.com', LH_THEME_SLUG); ?>">
                </label>
                <button class="button button--primary" type="submit"><?php esc_html_e('Join the list', LH_THEME_SLUG); ?></button>
            </form>
        </article>
    </div>
</section>

