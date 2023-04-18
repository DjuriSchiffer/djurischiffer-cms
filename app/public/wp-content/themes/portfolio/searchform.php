<?php
/**
 * The template for displaying search forms
 *
 * @package theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label for="s"><?php esc_html_e( 'Search', 'local' ); ?></label>
		<input id="s" name="s" type="text"
			placeholder="<?php esc_attr_e( 'Search &hellip;', 'local' ); ?>" value="<?php the_search_query(); ?>">
		<input id="searchsubmit" name="submit" type="submit" value="<?php esc_attr_e( 'Search', 'local' ); ?>">
</form>
