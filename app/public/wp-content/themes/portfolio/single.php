<?php
/**
 * The template for displaying all single posts.
 *
 * @package theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<div class="wrapper" id="single-wrapper">

	<main class="site-main text" id="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'loop-templates/content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>

	</main><!-- #main -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>
