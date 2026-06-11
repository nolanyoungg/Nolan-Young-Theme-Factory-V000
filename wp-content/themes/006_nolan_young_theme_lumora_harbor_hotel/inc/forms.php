<?php
if (!defined('ABSPATH')) {
    exit;
}

function lumora_harbor_contact_fields(): array {
    return ['name', 'email', 'phone', 'company', 'message'];
}

