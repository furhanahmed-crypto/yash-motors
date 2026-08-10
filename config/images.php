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
        'facility'    => asset('assets/images/about-us-img.png'),
        'innovation'  => IMAGE_BASE_URL . 'img-5.webp',
        'founder'     => asset('assets/images/founders-image.png'),
    ],
    'services' => [
        'sales'       => asset('assets/images/services/img-1.jpg'),
        'finance'     => asset('assets/images/services/img-2.jpg'),
        'servicing'   => asset('assets/images/services/img-12.jpg'),
        'battery'     => asset('assets/images/services/img-3.jpg'),
        'spares'      => asset('assets/images/services/img-11.jpg'),
        'breakdown'   => asset('assets/images/services/img-7.jpg'),
    ],
    'gallery' => [
        'item_1' => asset('assets/images/services/img-1.jpg'),
        'item_2' => asset('assets/images/services/img-2.jpg'),
        'item_3' => asset('assets/images/services/img-12.jpg'),
        'item_4' => asset('assets/images/services/img-3.jpg'),
        'item_5' => asset('assets/images/services/img-11.jpg'),
        'item_6' => asset('assets/images/services/img-7.jpg'),
    ],
    'testimonials' => [
        'avatar_1' => IMAGE_BASE_URL . 'img-1.webp',
        'avatar_2' => IMAGE_BASE_URL . 'img-3.webp',
        'avatar_3' => IMAGE_BASE_URL . 'img-5.webp',
        'avatar_4' => IMAGE_BASE_URL . 'img-7.webp',
    ],
];
