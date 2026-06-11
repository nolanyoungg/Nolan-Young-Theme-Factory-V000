<?php
if (!defined('ABSPATH')) { exit; }
function signalforge_customize_register($wp_customize) { $wp_customize->add_section('signalforge_options', array('title' => esc_html__('SignalForge Options', 'nolan-young-saas'))); }
add_action('customize_register', 'signalforge_customize_register');
