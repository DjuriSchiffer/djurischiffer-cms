<?php
/**
 * Partial template for content in front-page.php
 *
 * @package theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

//vars
$pageID = get_the_ID();
$components = get_fields($pageID);
$homeBanner = !empty($components['home_banner']) ? $components['home_banner'] : [];
?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php if(!empty($homeBanner)):?>
		<?php get_template_part( 'components-templates/home-banner', false, $homeBanner); ?>
	<?php endif;?>
</article><!-- #post-## -->
