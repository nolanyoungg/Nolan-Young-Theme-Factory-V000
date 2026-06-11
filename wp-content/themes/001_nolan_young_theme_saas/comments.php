<?php if (post_password_required()) { return; } ?>
<section id="comments" class="comments-area"><?php if (have_comments()) : ?><h2><?php esc_html_e('Discussion', 'nolan-young-saas'); ?></h2><?php wp_list_comments(array('style' => 'ol', 'short_ping' => true)); the_comments_navigation(); endif; comment_form(); ?></section>
