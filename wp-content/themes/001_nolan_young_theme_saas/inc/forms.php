<?php
if (!defined('ABSPATH')) { exit; }
function signalforge_sanitize_inquiry($value) { return sanitize_text_field(wp_unslash($value)); }
