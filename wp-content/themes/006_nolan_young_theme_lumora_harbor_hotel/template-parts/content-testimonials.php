<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<section class="section section--soft">
    <div class="section-inner">
        <div class="testimonial-grid">
            <?php foreach (lumora_harbor_site_data()['work'] as $item) : ?>
                <article class="testimonial reveal">
                    <blockquote>“<?php echo esc_html($item['result']); ?>”</blockquote>
                    <cite><?php echo esc_html($item['title']); ?></cite>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

