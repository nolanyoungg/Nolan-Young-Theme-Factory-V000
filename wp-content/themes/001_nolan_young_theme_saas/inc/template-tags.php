<?php
if (!defined('ABSPATH')) { exit; }
function signalforge_posted_on() { echo '<span class="posted-on">' . esc_html(get_the_date()) . '</span>'; }
