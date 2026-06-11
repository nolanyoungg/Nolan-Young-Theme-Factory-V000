<?php
if (!defined('ABSPATH')) { exit; }
add_action('init', function () { register_post_type('astragrid_work', ['label' => __('Work', 'astragrid-systems'), 'public' => true, 'show_in_rest' => true, 'supports' => ['title','editor','thumbnail','excerpt']]); });
