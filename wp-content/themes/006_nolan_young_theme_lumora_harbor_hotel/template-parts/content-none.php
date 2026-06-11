<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<article class="story-panel">
    <h2 class="section-title"><?php esc_html_e('Nothing is published here yet.', LH_THEME_SLUG); ?></h2>
    <p class="section-copy"><?php esc_html_e('Use the main navigation or the search form to find rooms, guides, or the next story to read.', LH_THEME_SLUG); ?></p>
    <p><?php esc_html_e('This empty state is deliberately helpful. It points guests toward the pages they are most likely to need next and keeps the tone consistent with the rest of the hotel site.', LH_THEME_SLUG); ?></p>
    <ul class="footer-links">
        <li><a href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Browse services', LH_THEME_SLUG); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/blog/')); ?>"><?php esc_html_e('Read the journal', LH_THEME_SLUG); ?></a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Send an inquiry', LH_THEME_SLUG); ?></a></li>
    </ul>
</article>
