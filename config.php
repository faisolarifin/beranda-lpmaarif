<?php
/**
 * Configuration file for LP Ma'arif NU Portal
 * 
 * @package LPMaarifNU
 * @version 2.0
 * @author Ach Faisol S Arifin
 */

// Environment settings
define('ENVIRONMENT', 'production'); // development, staging, production

// Site configuration
define('SITE_NAME', 'Lembaga Pendidikan Ma\'arif NU PBNU');
define('SITE_DESCRIPTION', 'Portal resmi Lembaga Pendidikan Ma\'arif Nahdlatul Ulama PBNU - Menaungi lebih dari 24.000 satuan pendidikan Islam berkualitas di seluruh Indonesia');
define('SITE_KEYWORDS', 'lp maarif, maarifnu, nu maarif nu, lembaga pendidikan, pendidikan islam, nahdlatul ulama, nu, sekolah islam, madrasah, sipinter, pendidikan berkualitas');
define('SITE_URL', 'https://beranda.maarif.nu.or.id');
define('SITE_VERSION', '2.0');

// Contact information
define('CONTACT_ADDRESS', 'Jl. Kramat Raya No. 164, Jakarta Pusat 10430, Indonesia');
define('CONTACT_PHONE', '(021) 3100 052');
define('CONTACT_EMAIL', 'info@maarif.nu.or.id');

// External links
define('PORTAL_URL', 'https://maarif.nu.or.id/');
define('SIPINTER_URL', 'https://sipinter.maarifnu.or.id/');

// Statistics data
define('TOTAL_SCHOOLS', 24000);
define('TOTAL_STUDENTS', 8000000);
define('TOTAL_TEACHERS', 600000);
define('ESTABLISHMENT_YEAR', 1926);

// Assets configuration
define('ASSETS_VERSION', '2.0.1');
define('CDN_URL', ''); // Leave empty if not using CDN

// Security settings
define('CSRF_TOKEN_NAME', 'lp_maarif_token');
define('SESSION_LIFETIME', 3600); // 1 hour

// Performance settings
define('ENABLE_GZIP', true);
define('CACHE_LIFETIME', 86400); // 24 hours
define('ENABLE_MINIFICATION', true);

// Social media links
define('FACEBOOK_URL', '#');
define('TWITTER_URL', '#');
define('INSTAGRAM_URL', '#');
define('YOUTUBE_URL', '#');

// Helper functions
function get_site_url($path = '') {
    return SITE_URL . '/' . ltrim($path, '/');
}

function get_asset_url($path) {
    $version = ASSETS_VERSION ? '?v=' . ASSETS_VERSION : '';
    return './assets/' . ltrim($path, '/') . $version;
}

function get_current_year() {
    return date('Y');
}

function format_number($number) {
    if ($number >= 1000000) {
        return floor($number / 1000000) . ' Juta+';
    } elseif ($number >= 1000) {
        return number_format($number) . '+';
    } else {
        return $number;
    }
}

function get_establishment_years() {
    return get_current_year() - ESTABLISHMENT_YEAR;
}

// Error reporting based on environment
if (ENVIRONMENT === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Security headers
if (ENVIRONMENT === 'production') {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: DENY');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');
}

?>