<?php if ( post_password_required() ) { return; } ?>
<section class="section comments-section">
	<div class="shell">
		<?php if ( have_comments() ) : ?>
			<h2><?php comments_number(); ?></h2>
			<ol class="comment-list"><?php wp_list_comments(); ?></ol>
		<?php endif; ?>
		<?php comment_form(); ?>
	</div>
</section>
