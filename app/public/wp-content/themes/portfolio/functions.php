<?php
/**
 * theme Theme functions and definitions
 *
 * @package theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

$theme_includes = array(
    '/coinmarketcap-api.php',              // Use of API
    '/wp-dashboard.php',                   // Clears dashboard and adds theme styling
);

foreach ( $theme_includes as $file ) {
    $filepath = locate_template( 'includes' . $file );
    if ( ! $filepath ) {
        trigger_error( sprintf( 'Error locating /includes%s for inclusion', $file ), E_USER_ERROR );
    }
    require_once $filepath;
}