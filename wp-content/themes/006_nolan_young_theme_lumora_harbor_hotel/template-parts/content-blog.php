<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="section">
    <div class="section-inner">
        <div class="section-head reveal">
            <span class="eyebrow"><?php esc_html_e('Journal', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('Helpful local travel content that supports booking decisions.', LH_THEME_SLUG); ?></h2>
        </div>
        <div class="grid-cards">
            <?php foreach (lumora_harbor_site_data()['journal'] as $item) : ?>
                <article class="card reveal" style="grid-column: span 4;">
                    <h3><?php echo esc_html($item['title']); ?></h3>
                    <p><?php echo esc_html($item['text']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

