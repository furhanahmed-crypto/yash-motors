<?php
if (!defined('YASH_MOTORS_INIT')) {
    require_once __DIR__ . '/init.php';
}
?>
<header class="site-header" id="site-header">
    <div class="container header-inner">
        <a href="<?php echo page_url('index'); ?>" class="logo" aria-label="<?php echo htmlspecialchars($site['name']); ?> home">
            <img
                src="<?php echo asset('assets/images/yash-motors-light.png'); ?>"
                alt="<?php echo htmlspecialchars($site['name']); ?>"
                class="logo-img"
                width="180"
                height="60"
                decoding="async">
        </a>

        <div class="header-actions">
            <a href="tel:<?php echo preg_replace('/\s+/', '', $site['phone']); ?>" class="btn-premium btn-premium--primary header-cta">Call Us</a>
            <button class="nav-toggle" id="nav-toggle" aria-label="Toggle menu" aria-expanded="false" aria-controls="main-nav">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<nav class="main-nav" id="main-nav" aria-label="Primary navigation">
    <div class="nav-drawer-brand">
        <a href="<?php echo page_url('index'); ?>" class="nav-drawer-logo" aria-label="<?php echo htmlspecialchars($site['name']); ?> home">
            <img
                src="<?php echo asset('assets/images/yash-motors-light.png'); ?>"
                alt="<?php echo htmlspecialchars($site['name']); ?>"
                class="logo-img nav-drawer-logo-img"
                width="180"
                height="60"
                decoding="async">
        </a>
    </div>

    <ul class="nav-list">
        <li><a href="<?php echo page_url('index'); ?>" class="nav-link<?php echo is_active_page('home') ? ' active' : ''; ?>">Home</a></li>
        <li><a href="<?php echo page_url('services'); ?>" class="nav-link<?php echo is_active_page('services') ? ' active' : ''; ?>">Services</a></li>
        <li><a href="<?php echo page_url('about'); ?>" class="nav-link<?php echo is_active_page('about') ? ' active' : ''; ?>">About Us</a></li>
        <li><a href="<?php echo page_url('contact'); ?>" class="nav-link<?php echo is_active_page('contact') ? ' active' : ''; ?>">Contact</a></li>
    </ul>

    <div class="nav-mobile-cta">
        <a href="tel:<?php echo preg_replace('/\s+/', '', $site['phone']); ?>" class="btn-premium btn-premium--primary btn-premium--block">Call Us</a>
    </div>
</nav>
<div class="nav-backdrop" id="nav-backdrop" aria-hidden="true"></div>