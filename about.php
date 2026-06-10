<?php
$current_page = 'about';
$is_about_page = true;
$page_title = 'About Yash Motors | Kompally\'s EV Experts';
$page_description = 'Learn about Yash Motors — Kompally\'s trusted electric vehicle showroom and service centre in Hyderabad.';
$page_eyebrow = 'About Us';
$page_heading = 'Kompally\'s Home for Electric Mobility';
$page_intro = 'Yash Motors was founded with a simple belief — that electric vehicles should be accessible, understandable, and backed by people who genuinely care. We are a locally rooted EV showroom and service centre in Kompally, Hyderabad.';
require __DIR__ . '/includes/init.php';
?>
<?php require __DIR__ . '/includes/head.php'; ?>
<?php require __DIR__ . '/includes/header.php'; ?>

<main>
    <?php require __DIR__ . '/sections/page-banner.php'; ?>
    <?php require __DIR__ . '/sections/about.php'; ?>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/scripts.php'; ?>
