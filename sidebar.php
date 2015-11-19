<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amt-travel-insiders
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

		<div id="secondary" class="center-block borderbox widget-area col-xs-12 col-sm-12 col-md-3 col-lg-3" role="complementary">
		<div id="box">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .well -->
</div><!-- #secondary -->
	</div> <!-- .row -->
</div> <!-- .container -->
