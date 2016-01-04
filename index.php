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
 * @package amttravelwp
 */

get_header(); ?>
<div class="home container">
	<div id="primary" class="text-center">
		<main id="main" class="site-main">
<div class="row second-home-slider-container">
			<div class="col-sm-6 col-md-6 col-lg-6">
				<div class="second-home-slider carousel slide" data-ride="carousel">
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
						<img src="<?php echo get_template_directory_uri();?>/img/smaller-slide-1.jpg" alt="slide" class="second-home-slider-item">
				    </div>
				    <div class="item">
						<img src="<?php echo get_template_directory_uri();?>/img/smaller-slide-2.jpg" alt="slide" class="second-home-slider-item">
				    </div>
				    <div class="item">
						<img src="<?php echo get_template_directory_uri();?>/img/smaller-slide-3.jpg" alt="slide" class="second-home-slider-item">
				    </div>
				  </div>
				  <!-- Wrapper for slides -->
			</div>
			</div>
		<div class="col-sm-6 col-md-6 col-lg-6">
			<iframe src="http://amttravelcom.ontraport.net/f/2/3711/90/e930ca7a8fa02e236a2bec988253e370/1" allowtransparency="true" scrolling="no" frameborder="0" class="moonray-form-iframe-p2c3711f90"></iframe>
			<img src="<?php echo get_template_directory_uri();?>/img/travel-mag-mock-min.gif" alt="Travel Magazine" class="pull-left hidden-xs" id="header-mag">
		</div>
	</div>
			<header class="col-md-12 col-lg-12 text-center">
				<h1 class="home page-title screen-reader-text" id="home-title">AMT, an American Express Travel Representative</h1>
			</header>
			<div class="col-md-2 col-lg-2 col-lg-offset-2">
				<a href="#" class="hidden-side-buttons">&nbsp;</a>
			</div>
			<div class="col-md-2 col-lg-2">
					<p>
						AMT, an American Express Travel Representative is proud to bring you our new, full featured travel website that offers great deals to many destinations around the world, plus the protection of American Express Travel, the largest seller of travel in the world. Whether your plans call for a cruise, ground tour, luxury vacation, or any type of trip, AMT, an American Express Travel Representative has the expertise and experience to make you excursion spectacular.
					</p>
					<ul class="home-list">
						<li><a  href="http://amttravel.ljohnsonsolutions.com/vacations/">Click here for Incredible Vacations</a></li>
						<li><a  href="http://amttravel.ljohnsonsolutions.com/cruises/">Click here for fabulous Luxury Cruises</a></li>
						<li><a  href="http://www.amtweddings.com/honeymoon.html"> Click for Honeymoon Travel</a></li>
						<li><a  href="http://amttravel.ljohnsonsolutions.com/world-cruises/">Around the World Cruises</a></li>
						<li><a  title="Grand Mariner Club" href="http://amttravel.ljohnsonsolutions.com/grand-mariner-club-2/">Grand Mariner Club</a></li>
					</ul>
					<p>
						For experienced travelers interested in the cruise experience of a lifetime, try the American Express Grand Mariner Club. No matter which amazing Grand Voyage cruise you book with AMT, an American Express Travel Representative, when you cruise with the Mariner Club, you’re guaranteed a range of additional travel-related offers and amenities, including a $100 statement credit when you pay with your American Express® Card on qualifying cruises and vacations. This AMT, an American Express Travel Representative site is full of so many hot deals and specials to so many travel destinations, we can’t possibly list every cruise, tour, or vacation. If you don’t see the travel combination you are looking for, give us a call on our reservation hotline and we'll find it for you.
					</p>
			</div>
			<div class="col-md-3 col-lg-3 home-sidebar">
				<a href="http://amtvacations.com/" class="side-buttons text-center">AMT Vacations</a><br>
				<a href="http://www.amttravel.com/travel-network-2.html" class="side-buttons">Why American Express</a><br>
				<a href="http://www.amtweddings.com/honeymoon.html" class="side-buttons">Honeymoons</a><br>
				<a href="http://www.amttravel.com/1001-places-to-travel/1001-travel-places-home.html" class="side-buttons">1001 Places to see</a><br>
				<a href="http://amt-travel-insiders.com/" class="side-buttons">Travel Insiders</a><br>
				<a href="http://www.amttravel.com/quick-quote/" class="side-buttons">Quick Quotes</a><br>
				<a href="http://amttravel.com/destinations-fall-2015/amt/index.html" class="side-buttons">Destination Magazine</a>
				<p>
					<img src="<?php echo get_template_directory_uri();?>/img/travel-mag-mock-min.gif" alt="Travel Magazine">
				</p>
				<p class="home-text">
					Call us for details now
				</p>
				<p class="home-text">
					1-800-999-2599
				</p>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
