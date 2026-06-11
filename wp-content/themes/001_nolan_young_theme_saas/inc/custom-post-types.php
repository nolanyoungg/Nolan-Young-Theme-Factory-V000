<?php
if (!defined('ABSPATH')) { exit; }
function signalforge_register_case_studies() { register_post_type('case_study', array('label' => esc_html__('Case Studies', 'nolan-young-saas'), 'public' => true, 'show_in_rest' => true, 'supports' => array('title','editor','thumbnail','excerpt'))); }
add_action('init', 'signalforge_register_case_studies');
