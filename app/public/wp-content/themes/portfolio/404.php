<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>
<div class="wrapper" id="error-404-wrapper">

    <main class="site-main" id="main">

        <section class="error-404 not-found">

            <header class="page-header">

                <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'local' ); ?></h1>

            </header><!-- .page-header -->

            <div class="page-content">

                <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'local' ); ?></p>

                <?php get_search_form(); ?>

            </div><!-- .page-content -->

        </section><!-- .error-404 -->

    </main><!-- #main -->

</div><!-- #error-404-wrapper -->
<?php get_footer(); ?>