<?php
if (!defined('ABSPATH')) {
    exit;
}
$data = lumora_harbor_site_data();
?>
<section class="section section--soft">
    <div class="section-inner">
        <div class="section-head reveal">
            <span class="eyebrow"><?php esc_html_e('Guest scenarios', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('Room, event, and itinerary stories that show how the hotel behaves in real life.', LH_THEME_SLUG); ?></h2>
            <p class="section-copy"><?php esc_html_e('The work section highlights the kinds of stays the hotel is designed to host: anniversaries, small retreats, weddings, and restorative weekends.', LH_THEME_SLUG); ?></p>
        </div>
        <div class="grid-cards">
            <?php foreach ($data['work'] as $item) : ?>
                <article class="card reveal" style="grid-column: span 4;">
                    <div class="card__meta">
                        <span><?php esc_html_e('Hospitality scenario', LH_THEME_SLUG); ?></span>
                    </div>
                    <h3><?php echo esc_html($item['title']); ?></h3>
                    <p><strong><?php esc_html_e('Goal:', LH_THEME_SLUG); ?></strong> <?php echo esc_html($item['goal']); ?></p>
                    <p><strong><?php esc_html_e('Result:', LH_THEME_SLUG); ?></strong> <?php echo esc_html($item['result']); ?></p>
                    <p><strong><?php esc_html_e('Services used:', LH_THEME_SLUG); ?></strong> <?php echo esc_html($item['services']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<section class="section">
    <div class="section-inner">
        <div class="section-head reveal">
            <span class="eyebrow"><?php esc_html_e('Local guides', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('The journal gives travelers practical and atmospheric help before they arrive.', LH_THEME_SLUG); ?></h2>
        </div>
        <div class="grid-cards">
            <?php foreach ($data['journal'] as $article) : ?>
                <article class="card card--visual reveal" data-visual="lobby" style="grid-column: span 4;">
                    <div class="card__meta"><span><?php esc_html_e('Journal', LH_THEME_SLUG); ?></span></div>
                    <h3><?php echo esc_html($article['title']); ?></h3>
                    <p><?php echo esc_html($article['text']); ?></p>
                    <p><a class="button button--ghost" href="<?php echo esc_url($article['link']); ?>"><?php esc_html_e('Read guide', LH_THEME_SLUG); ?></a></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

