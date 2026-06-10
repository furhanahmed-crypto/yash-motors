<?php

/**
 * Centralized image configuration.
 * Replace these URLs with local paths when final assets are ready.
 *
 * Example: 'banner_1' => '/assets/images/banner-1.webp'
 */

define('IMAGE_BASE_URL', 'https://nexevmobility.com/images/ev-scooters/');

return [
    'banners' => [
        'slide_1' => IMAGE_BASE_URL . 'banner-img-1.webp',
        'slide_2' => IMAGE_BASE_URL . 'img-1.webp',
        'slide_3' => IMAGE_BASE_URL . 'img-7.webp',
    ],
    'vehicles' => [
        'eco_plus'    => IMAGE_BASE_URL . 'img-2.webp',
        'purple'      => IMAGE_BASE_URL . 'img-3.webp',
        'e_scooter'   => IMAGE_BASE_URL . 'img-4.webp',
        'y2'          => IMAGE_BASE_URL . 'img-5.webp',
        'flexi_y1'    => IMAGE_BASE_URL . 'img-6.webp',
        'loader'      => IMAGE_BASE_URL . 'img-8.webp',
    ],
    'about' => [
        'facility'    => IMAGE_BASE_URL . 'img-9.webp',
        'innovation'  => IMAGE_BASE_URL . 'img-5.webp',
    ],
    'services' => [
        'sales'       => IMAGE_BASE_URL . 'img-1.webp',
        'finance'     => IMAGE_BASE_URL . 'img-2.webp',
        'servicing'   => IMAGE_BASE_URL . 'img-9.webp',
        'battery'     => IMAGE_BASE_URL . 'img-3.webp',
        'spares'      => IMAGE_BASE_URL . 'img-5.webp',
        'breakdown'   => IMAGE_BASE_URL . 'img-7.webp',
    ],
    'gallery' => [
        'item_1' => IMAGE_BASE_URL . 'img-1.webp',
        'item_2' => IMAGE_BASE_URL . 'img-2.webp',
        'item_3' => IMAGE_BASE_URL . 'img-3.webp',
        'item_4' => IMAGE_BASE_URL . 'img-4.webp',
        'item_5' => IMAGE_BASE_URL . 'img-6.webp',
        'item_6' => IMAGE_BASE_URL . 'img-7.webp',
        'item_7' => IMAGE_BASE_URL . 'img-8.webp',
        'item_8' => IMAGE_BASE_URL . 'img-9.webp',
    ],
    'testimonials' => [
        'avatar_1' => IMAGE_BASE_URL . 'img-1.webp',
        'avatar_2' => IMAGE_BASE_URL . 'img-3.webp',
        'avatar_3' => IMAGE_BASE_URL . 'img-5.webp',
        'avatar_4' => IMAGE_BASE_URL . 'img-7.webp',
    ],
];
