<?php
if ( post_password_required() ) { return; }
?><section class="section comments-area"><div class="container"><h2><?php esc_html_e( 'Discussion', NYP_SLUG ); ?></h2><?php comment_form(); ?></div></section>
