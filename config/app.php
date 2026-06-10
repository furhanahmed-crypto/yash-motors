<?php

/**
 * Site path helpers.
 * Set BASE_PATH to '/subfolder' if deployed in a subdirectory.
 */
define('BASE_PATH', '');

function asset($path)
{
    return BASE_PATH . '/' . ltrim($path, '/');
}

function site_url($path)
{
    return asset($path);
}

function page_url($page)
{
    return site_url($page . '.php');
}

function is_active_page($page)
{
    return isset($GLOBALS['current_page']) && $GLOBALS['current_page'] === $page;
}
