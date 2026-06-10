<?php
$current_page = 'gallery';
$page_title = 'Gallery | Yash Motors Kompally';
$page_description = 'View photos from Yash Motors showroom and service centre in Kompally, Hyderabad — electric vehicles on display and our facility.';
$page_eyebrow = 'Gallery';
$page_heading = 'Inside Our Kompally Showroom';
$page_intro = 'Take a look at the electric vehicles on display, our showroom floor, and the service facility that keeps your EV running smoothly.';
require __DIR__ . '/includes/init.php';
?>
<?php require __DIR__ . '/includes/head.php'; ?>
<?php require __DIR__ . '/includes/header.php'; ?>

<main>
    <?php require __DIR__ . '/sections/page-banner.php'; ?>
    <?php require __DIR__ . '/sections/gallery.php'; ?>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/scripts.php'; ?>
