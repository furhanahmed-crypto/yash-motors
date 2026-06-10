<?php
if (!defined('YASH_MOTORS_INIT')) {
    require_once __DIR__ . '/init.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="Yash Motors, electric scooter, EV showroom, Kompally, Hyderabad, electric two-wheeler, EV service centre">
    <meta name="author" content="Yash Motors">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0c1f17">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:locale" content="en_IN">

    <title><?php echo htmlspecialchars($page_title); ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo asset('assets/css/main.css'); ?>">

    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' rx='20' fill='%230c1f17'/%3E%3Ctext x='50' y='68' font-family='sans-serif' font-size='48' font-weight='700' fill='%234ade80' text-anchor='middle'%3EY%3C/text%3E%3C/svg%3E">
</head>
<body data-page="<?php echo htmlspecialchars($current_page); ?>">
