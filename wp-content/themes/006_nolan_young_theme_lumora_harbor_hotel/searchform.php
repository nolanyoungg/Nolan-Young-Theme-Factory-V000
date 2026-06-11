<?php
if (!defined('ABSPATH')) {
    exit;
}
?>
<form class="search-form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="sr-only" for="search-input"><?php esc_html_e('Search the hotel site', LH_THEME_SLUG); ?></label>
    <input id="search-input" type="search" name="s" value="<?php echo esc_attr(get_search_query()); ?>" placeholder="<?php esc_attr_e('Search stays, guides, and events', LH_THEME_SLUG); ?>">
    <button class="button button--primary" type="submit"><?php esc_html_e('Search', LH_THEME_SLUG); ?></button>
</form>

