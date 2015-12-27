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
<div class="home container text-center">
	<div id="primary" class="text-center">
		<main id="main" class="site-main">
			<header class="col-md-12 col-lg-12 text-center">
				<h1 class="home page-title screen-reader-text" id="home-title">AMT, an American Express Travel Representative</h1>
			</header>

			<div class="col-md-2 col-lg-2 col-md-offset-3 col-lg-offset-3 text-center">
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
			<div class="col-md-3 col-lg-3 text-center center-block">
				<a href="" class="side-buttons text-center">AMT Vacations</a><br>
				<a href="" class="side-buttons">Why American Express</a><br>
				<a href="" class="side-buttons">Honeymoons</a><br>
				<a href="" class="side-buttons">Travel Insiders</a><br>
				<a href="" class="side-buttons">Quick Quotes</a><br>
				<a href="" class="side-buttons">Destination Magazine</a>
				<p>
					<img src="<?php echo get_template_directory_uri();?>/img/travel-mag-mock-min.jpg">
				</p>
				<p class="home-text">
					Call us for details now
				</p>
				<p class="home-text">
					1-800-999-2599
				</p>
				<p>
					<img src="<?php echo get_template_directory_uri();?>/img/iata-logos-min.jpg">
				</p>
			</div>
			<div class="col-md-12 col-lg-12 text-center">
				<p class="home-text">For all travel emergencies, please contact the 24 hour free hotline in your travel voucher
Office hours: Monday through Friday 9:00 AM to 5:30 PM Pacific Time 800-999-2599</p>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
