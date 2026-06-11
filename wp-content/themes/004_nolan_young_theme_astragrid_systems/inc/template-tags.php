<?php
if (!defined('ABSPATH')) { exit; }
function astragrid_posted_on() { echo '<span>' . esc_html(get_the_date()) . '</span>'; }
