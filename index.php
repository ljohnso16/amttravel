<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package amt-travel-insiders
 */

get_header(); ?>
<div class="home container text-center">
	<div id="primary" class="col-md-12 col-lg-12 text-center">
		<main id="main" class="site-main">
				<header>
					<h2 class="home page-title screen-reader-text">Welcome to AMT American Express Weddings Division</h2><div class=" icon-line"><hr class="icon-bars"><span class="icon-heart icom"></span><hr class="icon-bars"></div>
				</header>
		</main><!-- #main -->
	</div><!-- #primary -->
	<div id="home-sidebar-area">
<div>
			<div id="home-heroes-a" class="text-center fixed-bg col-sm-12 col-md-12 col-lg-12"></div>
			<div class="hero-text col-sm-12 col-md-12 col-lg-12"><span class="icon-map circled-icon"></span><div class="hero-title">Worry Free</div><div class="hero-words">According to Samuel Johnson, honeymoons are a time "when there is nothing but tenderness and pleasure." But in today’s fast track world, a groom or bride to be finds themselves overwhelmed with the many other wedding arrangements. That's where AMT American Express Travel comes in.</div></div>

</div>

<div>
<div id="home-heroes-b" class="fixed-bg col-sm-12 col-md-12 col-lg-12"></div>
<div class="hero-text col-sm-12 col-md-12 col-lg-12 text-center "><span class="icon-phone circled-icon"></span><div class="hero-title">Bookings</div><div class="hero-words">As on of the largest leisure travel providers, AMT American Express Travel is the ONLY place to book your ohoneyjmooon. If you are not quite sure wher you would like to go, call us at 1-800-9999-2599 and speak to one of our Honeymoon Specialists!</div></div>
</div>

<div>
	<div id="home-heroes-c" class="fixed-bg col-sm-12 col-md-12 col-lg-12"></div>
	<div class="hero-text col-sm-12 col-md-12 col-lg-12 text-center "><span class="icon-bubbles4 circled-icon"></span><div class="hero-title">Real People, Real Solutions</div><div class="hero-words">We'll do all the ressearch and find the best palce within your budget that meets all of your travel needs. If you do know where you and your fugure spouse would like to honemoon, get an isntant quote on our online booking engine.</div></div>
</div>
<div class="honeymooners-hero-text col-sm-12 col-md-12 col-lg-12 text-center "><h2 class="honeymooners-hero-title"><a href="./registry" title="Registry">Honeymoon Registry</a></h2><div class="honeymooners-hero-words">Find the happy couple below and be sure to make their dream honeymoon come true.<br> If you would like to be one of the happy couples in the registry , call us at 800-999-2599.</div><div class=" icon-line"><hr class="icon-bars"><span class="icon-heart icom"></span><hr class="icon-bars"></div></div>
<div style="clear:both"></div>
<?php dynamic_sidebar('home-sidebar-area');?>
<?php dynamic_sidebar('home-sidebar-area-mobile');?>

</div></div>
<div class="clearfix"></div>
<?php get_footer(); ?>
