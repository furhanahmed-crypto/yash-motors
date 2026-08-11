<?php
$current_page = 'home';
$page_title = 'Yash Motors | EV Showroom in Kompally, Hyderabad';
$page_description = 'Explore the best electric vehicles in Kompally, Hyderabad. Visit Yash Motors — your trusted EV showroom and service centre.';
require __DIR__ . '/includes/init.php';
?>
<?php require __DIR__ . '/includes/head.php'; ?>
<?php require __DIR__ . '/includes/header.php'; ?>

<main>
    <?php require __DIR__ . '/sections/hero.php'; ?>
    <?php require __DIR__ . '/sections/founder-message.php'; ?>
    <?php require __DIR__ . '/sections/about.php'; ?>
    <?php require __DIR__ . '/sections/why-electric.php'; ?>
    <?php require __DIR__ . '/sections/service-teaser.php'; ?>
    <?php require __DIR__ . '/sections/gallery.php'; ?>
    <?php require __DIR__ . '/sections/testimonials.php'; ?>
    <?php require __DIR__ . '/sections/faq.php'; ?>
    <?php require __DIR__ . '/sections/cta-banner.php'; ?>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/scripts.php'; ?>