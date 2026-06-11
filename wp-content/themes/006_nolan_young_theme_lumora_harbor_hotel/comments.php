<?php
if (!defined('ABSPATH')) {
    exit;
}

if (post_password_required()) {
    return;
}
?>
<section class="section section--soft comments-area" id="comments">
    <div class="section-inner">
        <div class="section-head">
            <span class="eyebrow"><?php esc_html_e('Guest Notes', LH_THEME_SLUG); ?></span>
            <h2 class="section-title"><?php esc_html_e('Thoughtful conversation matters here.', LH_THEME_SLUG); ?></h2>
            <p class="section-copy"><?php esc_html_e('Comments, questions, and hospitality notes are welcome below the article. The form keeps the tone calm and easy to read on mobile.', LH_THEME_SLUG); ?></p>
        </div>
        <?php if (have_comments()) : ?>
            <ol class="comment-list">
                <?php wp_list_comments(['style' => 'ol', 'short_ping' => true]); ?>
            </ol>
        <?php endif; ?>
        <?php comment_form([
            'title_reply' => __('Leave a note', LH_THEME_SLUG),
            'class_submit' => 'button button--primary',
        ]); ?>
    </div>
</section>

