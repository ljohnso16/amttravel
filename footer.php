<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package amt-travel-insiders
 */
?>

	</div><!-- #content -->

	<footer id="site-footer">
		<div class="container">
<div class="col-sm-6 col-md-6 col-lg-3"><div id="footer-logo" class="center-block"><img src="<?php echo get_template_directory_uri();?>/img/AMT-AmexLogo-min.png" alt="Footer Logo">
</div>
<?php dynamic_sidebar( 'footer-left' ); ?></div>
<div class="col-sm-6 col-md-6 col-lg-3 text-center"><?php dynamic_sidebar( 'footer-sidebar-right' ); ?></div>
<div class="col-sm-6 col-md-6 col-lg-3">
	<?php if (has_nav_menu('footer-menu', 'amt-travel-insiders')) { ?>
	<nav>
	<h4>Explore</h4>
	<?php wp_nav_menu(array(
	'container'       => 'div',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'menu_class'      => 'footer-menu',
	'theme_location'  => 'footer-menu')
	);
	?>
	</nav>
	<?php } ?></div>
<div class="copy-text col-sm-6 col-md-6 col-lg-3 text-center">
	<p class="copy-text">&copy; <?php _e('All Rights Reserved', 'amt-travel-insiders'); ?> <?php echo date('Y'); ?> - <a href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
</div>
		</div><!-- .containr -->
</footer><!-- #colophon -->
</div><!-- #page1 -->
<?php wp_footer(); ?>
</body>
</html>
