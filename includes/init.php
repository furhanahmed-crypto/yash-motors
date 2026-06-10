<?php

if (defined('YASH_MOTORS_INIT')) {
    return;
}

require_once __DIR__ . '/../config/app.php';
$images = require __DIR__ . '/../config/images.php';
require __DIR__ . '/data.php';

if (!isset($current_page)) {
    $current_page = '';
}

if (!isset($page_title) || $page_title === '') {
    $page_title = $site['name'] . ' — ' . $site['tagline'];
}

if (!isset($page_description) || $page_description === '') {
    $page_description = $site['description'];
}

if (!isset($page_heading)) {
    $page_heading = '';
}

if (!isset($page_eyebrow)) {
    $page_eyebrow = '';
}

if (!isset($page_intro)) {
    $page_intro = '';
}

if (!isset($is_about_page)) {
    $is_about_page = false;
}

if (!isset($is_services_page)) {
    $is_services_page = false;
}

define('YASH_MOTORS_INIT', true);
