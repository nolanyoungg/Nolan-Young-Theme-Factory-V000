<?php
if (!defined('ABSPATH')) { exit; }
function signalforge_policy_title($title) { return is_privacy_policy() ? esc_html__('SignalForge Privacy Notes', 'nolan-young-saas') : $title; }
add_filter('the_title', 'signalforge_policy_title');
