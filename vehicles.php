<?php
$current_page = 'vehicles';
$page_title = 'Electric Vehicles | Yash Motors Kompally';
$page_description = 'Explore electric scooters at Yash Motors showroom in Kompally, Hyderabad. Compare brands, book test rides, and get expert EV guidance.';
$page_eyebrow = 'Showroom Range';
$page_heading = 'Explore Electric Two-Wheelers at Our Kompally Showroom';
$page_intro = 'Carefully curated selection of electric scooters from leading brands — available to see, compare, and test-ride at Yash Motors.';
require __DIR__ . '/includes/init.php';
?>
<?php require __DIR__ . '/includes/head.php'; ?>
<?php require __DIR__ . '/includes/header.php'; ?>

<main>
    <?php require __DIR__ . '/sections/page-banner.php'; ?>
    <?php require __DIR__ . '/sections/vehicles.php'; ?>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/scripts.php'; ?>
