<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package amttravelwp
 */
?>

	</div><?php if(!is_home())
		echo '</div></div><!-- .containr -->';?>
		<!-- #content -->
			<div class="col-md-12 col-lg-12 text-center hidden-xs hidden-sm">
				<p><img src="<?php echo get_template_directory_uri();?>/img/iata-logos-min.jpg" alt="iata"></p>
				<p class="home-text">For all travel emergencies, please contact the 24 hour free hotline in your travel voucher Office hours: Monday through Friday 9:00 AM to 5:30 PM Pacific Time 800-999-2599</p>
			</div>
			<div class="clearfix">&nbsp;</div>
	<footer id="site-footer">
		<div class="container">
<div class="col-sm-6 col-md-6 col-lg-3"><div id="footer-logo" class="center-block"><img src="<?php echo get_template_directory_uri();?>/img/AMT-AmexLogo-min.png" alt="Footer Logo">
</div>
<div id="help-text">For all travel emergencies, please contact the 24-hour free hotline in your travel voucher
Office Hours: Monday through Friday 9:00 AM to 5:30 PM Pacific Time</div></div>
<div class="col-sm-6 col-md-6 col-lg-3 text-center center-block"><script type="text/javascript" src="//forms.ontraport.com/v2.4/include/formEditor/genbootstrap.php?method=iframe&uid=p2c3711f91&version=1"></script></div>
<div class="col-sm-6 col-md-6 col-lg-3">
	<?php if (has_nav_menu('footer-menu', 'amttravelwp')) { ?>
	<nav>
	<h4>Explore</h4>
	<?php wp_nav_menu(array(
	'container'       => 'div',
	'items_wrap'      => '<ul id="menu-explore" class="%2$s">%3$s</ul>',
	'menu_class'      => 'footer-menu',
	'theme_location'  => 'footer-menu')
	);
	?>
	</nav>
	<?php } ?></div>
<div class="copy-text col-sm-6 col-md-6 col-lg-3 text-center">
	<p class="copy-text">&copy; <?php _e('All Rights Reserved', 'amttravelwp'); ?> <?php echo date('Y'); ?> - <a href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
</div>
</div>
</footer><!-- #colophon -->
</div><!-- #page1-1 -->
<?php wp_footer(); ?>
</body>
</html>
