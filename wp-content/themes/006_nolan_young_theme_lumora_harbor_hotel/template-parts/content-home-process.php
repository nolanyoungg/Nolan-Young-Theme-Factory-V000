<?php
if (!defined('ABSPATH')) {
    exit;
}
$steps = [
    ['title' => __('Choose your path', LH_THEME_SLUG), 'copy' => __('Select a stay, event, or dining-first experience and confirm the trip style that matters most.', LH_THEME_SLUG)],
    ['title' => __('Share the details', LH_THEME_SLUG), 'copy' => __('Provide dates, guest count, accessibility notes, and any special moments the team should plan around.', LH_THEME_SLUG)],
    ['title' => __('Review availability', LH_THEME_SLUG), 'copy' => __('The hotel responds with room options, package suggestions, or event ideas that fit the calendar.', LH_THEME_SLUG)],
    ['title' => __('Confirm and settle in', LH_THEME_SLUG), 'copy' => __('Receive direct booking confirmation and a concise arrival note so the stay starts without friction.', LH_THEME_SLUG)],
];
?>
<section class="section section--soft">
    <div class="section-inner">
        <div class="section-head reveal">
            <span class="eyebrow"><?php esc_html_e('How it works', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('Booking, event inquiry, and concierge planning all follow a clear path.', LH_THEME_SLUG); ?></h2>
        </div>
        <div class="grid-cards">
            <?php foreach ($steps as $index => $step) : ?>
                <article class="card reveal" style="grid-column: span 3;">
                    <div class="card__meta"><span><?php echo esc_html(sprintf('%02d', $index + 1)); ?></span></div>
                    <h3><?php echo esc_html($step['title']); ?></h3>
                    <p><?php echo esc_html($step['copy']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="section">
    <div class="section-inner two-column">
        <div class="story-panel reveal">
            <span class="eyebrow"><?php esc_html_e('Frequently asked', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('Guests know exactly what to expect before they arrive.', LH_THEME_SLUG); ?></h2>
            <div class="faq-list">
                <?php foreach (lumora_harbor_site_data()['faq'] as $faq) : ?>
                    <details class="faq-item">
                        <summary><?php echo esc_html($faq['question']); ?></summary>
                        <div class="faq-item__content"><?php echo esc_html($faq['answer']); ?></div>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="story-panel__visual reveal"></div>
    </div>
</section>
