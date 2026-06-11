<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<article class="story-panel">
    <div class="section-head">
        <span class="eyebrow"><?php echo esc_html(lumora_harbor_posted_on()); ?></span>
        <h1 class="section-title"><?php the_title(); ?></h1>
    </div>
    <?php if (has_post_thumbnail()) : ?>
        <div class="story-panel__visual"><?php the_post_thumbnail('lumora-harbor-hero'); ?></div>
    <?php endif; ?>
    <div class="section-copy">
        <?php the_content(); ?>
    </div>
</article>

