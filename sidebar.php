<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amttravelwp
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;

$sidebar = get_post_meta($post->ID, 'Side Box Text', true);
//Checking if anything exists for the key Songs
if (!$sidebar) {
return;
}
?>

		<div id="secondary" class="center-block col-xs-12 col-sm-12 col-md-3 col-lg-3" role="complementary">
			<?php echo $sidebar; ?>
	</div><!-- #secondary -->
	</div> <!-- .row -->
</div> <!-- .container -->
