<?php
$current_page = 'reviews';
$page_title = 'Customer Reviews | Yash Motors Kompally';
$page_description = 'Read what customers say about Yash Motors — Kompally\'s trusted electric vehicle showroom and service centre in Hyderabad.';
$page_eyebrow = 'What Our Customers Say';
$page_heading = 'Loved by Riders Across Hyderabad';
$page_intro = 'Real experiences from customers who visited our Kompally showroom and service centre.';
require __DIR__ . '/includes/init.php';
?>
<?php require __DIR__ . '/includes/head.php'; ?>
<?php require __DIR__ . '/includes/header.php'; ?>

<main>
    <?php require __DIR__ . '/sections/page-banner.php'; ?>
    <?php require __DIR__ . '/sections/testimonials.php'; ?>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/scripts.php'; ?>
