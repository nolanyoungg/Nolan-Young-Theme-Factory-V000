<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<article class="card">
    <div class="card__meta"><?php echo esc_html(lumora_harbor_posted_on()); ?></div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php echo esc_html(lumora_harbor_excerpt_text(28)); ?></p>
    <p><?php esc_html_e('Search results should still feel like part of the hotel experience: concise, practical, and easy to scan on a phone while planning the stay.', LH_THEME_SLUG); ?></p>
    <p><a class="button button--ghost" href="<?php the_permalink(); ?>"><?php esc_html_e('Open article', LH_THEME_SLUG); ?></a></p>
</article>
