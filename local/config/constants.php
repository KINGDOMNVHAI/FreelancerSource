<?php
// ========== ONE FOR ALL ==========

// === LANGUAGE ===
define('DEFAULT_LANGUAGE', 'en');

// === User's Role ===
if (!defined('ROLE_ADMIN')) {
    define('ROLE_ADMIN', 1);
    define('ROLE_EDITOR', 2);
    define('ROLE_WRITER', 3);
    define('ROLE_MEMBER', 4);
}

// === Enable ===

define('ENABLE', true);
define('UNENABLE', false);

// === Info ===

define('ADDRESS', '');
define('PHONE', '');
define('PHONE_TEXT', '');
define('EMAIL', '');
define('SHIPPING_PRICE', 10000);
define('SHIPPING_PRICE_TEXT', '10.000');

// === Info ===

define('LIMIT_6', 6);
define('LIMIT_8', 8);
define('LIMIT_12', 12);
define('LIMIT_24', 24);

// === URL ===

define('URL_SHOPEE', 'duong-dan-shopee');
define('URL_LAZADA', 'duong-dan-lazada');
define('URL_FACEBOOK', 'duong-dan-facebook');
define('URL_YOUTUBE', 'duong-dan-youtube');
define('URL_TWITTER', 'duong-dan-twitter');

// === URL CATEGORY ===

define('CATEGORY_URL_NGOAI_NGU', 'ngoai-ngu');
define('CATEGORY_URL_TIENG_ANH', 'tieng-anh');
define('CATEGORY_URL_TIENG_NHAT', 'tieng-nhat');
define('CATEGORY_URL_KINH_TE', 'kinh-te');
define('CATEGORY_URL_MANGA', 'manga');
define('CATEGORY_URL_VAN_PHONG_PHAM', 'van-phong-pham');

define('CATEGORY_NGOAI_NGU', 1);
define('CATEGORY_TIENG_ANH', 2);
define('CATEGORY_TIENG_NHAT', 3);
define('CATEGORY_KINH_TE', 4);
define('CATEGORY_MANGA', 5);
define('CATEGORY_VAN_PHONG_PHAM', 6);

define('BOOKING_STATUS_NEW', 1);
define('BOOKING_STATUS_PROCESSING', 2);
define('BOOKING_STATUS_DONE', 3);
define('BOOKING_STATUS_CANCELLED', 4);

$titleMain = " | Bookstore";

return [
    'title' => [
        'main' => $titleMain,
        'login' => 'Login' . $titleMain,
        'forgot-password' => 'Forgot Password' . $titleMain,
        'dashboard' => 'Dashboard' . $titleMain,
        'post-management' => 'POST MANAGEMENT' . $titleMain,
        'site-management' => 'SITE MANAGEMENT' . $titleMain,
    ],

    'booking' => [
        'status.new' => 1,
        'status.processing' => 2,
        'status.done' => 3,
        'status.cancelled' => 4,
    ],

    'email' => [
        'sent' => "Email đã được gửi",
        'payment' => "Cảm ơn bạn đã thanh toán",
    ],

    'limit' => [
        '6' => 6,
        '12' => 12,
        '20' => 20,
        '24' => 24,
        '30' => 30,
        '36' => 36,
        '40' => 40,
        '50' => 50,
    ],
];
