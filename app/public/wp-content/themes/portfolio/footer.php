<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the <body> and all content after
 *
 * @package theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

    /* Always have wp_footer() just before the closing </body>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to reference JavaScript files.
    */
    wp_footer();
?>
    </body>
</html>