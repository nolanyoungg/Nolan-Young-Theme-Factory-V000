<?php
if (!defined('ABSPATH')) { exit; }
function astragrid_asset($path) { return esc_url(get_template_directory_uri() . '/assets/' . ltrim($path, '/')); }
