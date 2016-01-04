<?php
/**
 *
 * Template Name: Cruise Template
 *
 * The template for displaying the left sidebar page.
 *
 *
 * @package amttravelwp
 */

get_header(); ?>
<div class="container">
	<div class="row">
	<div id="primary" class="col-sm-12 col-xs-12 col-md-9 col-lg-9">
		<main class="site-main">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="clearfix">
				<div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
					<a href="" class="top-buttons text-center">Honeymoon Packages</a>
				</div>
				<div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
					<a href="" class="top-buttons text-center">Travel Destination Newsletter</a>
				</div>
				<div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
					<a href="" class="top-buttons text-center">Sandals Honeymooners Exclusives</a>
				</div>
				<div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
					<a href="" class="top-buttons text-center">World Destinations</a>
				</div>
				<div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
				&nbsp;
				</div>
				<div class="col-sm-4 col-xs-4 col-md-4 col-lg-4">
<a href="" class="top-buttons text-center">1001 Places to see</a>
				</div>
			</div>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// // If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div>
	<!-- #primary -->
	<!-- #secondary -->
	<div id="secondary" class="center-block col-xs-12 col-sm-12 col-md-3 col-lg-3 text-center" role="complementary">
		<a href="http://amtamericanexpresstravel11.regent.wvgcruise.com/" class="side-buttons text-center">Regent</a>
		<a href="http://amtamericanexpresstravel12.oceania.wvgcruise.com/" class="side-buttons text-center">Oceania</a>
		<a href="http://amtamericanexpresstravel.silversea.wvgcruise.com/" class="side-buttons text-center">Silversea</a>
		<a href="http://cruises.avalonwaterways.com/andy@amttravel.com/home.html" class="side-buttons text-center">Avala Waterways</a>
		<a href="http://www.amttravel.com/world-cruises/" class="side-buttons text-center">World Cruises</a>
			<div class="video_links">
			<h3>Cruise Line Videos</h3>
			<a href="http://www.amttravel.com/regent-cruises/" class="videoLoader">Regent Cruises</a>
			<a href="http://www.amttravel.com/silversea-cruises/" class="videoLoader">Silversea Cruises</a>
			<a href="http://www.amttravel.com/princess-cruises/" class="videoLoader">Princess Cruises</a>
			<a href="http://www.amttravel.com/oceania-cruises/" class="videoLoader">Oceania Cruises</a>
			<a href="http://www.amttravel.com/holland-america-cruises/" class="videoLoader">Holland America</a>
			<a href="http://www.amttravel.com/crystal-world-cruise/" class="videoLoader">Crystal World Cruises</a>
			<a href="http://www.amttravel.com/silversea-cruise-line/" class="videoLoader">Silversea Cruise Lines</a>
			<a href="http://www.amttravel.com/silversea-world-cruise/" class="videoLoader">Silversea World Cruise</a>

			<div style="width:188px; margin:10px;background-color: rgb(211, 211, 211);" class="center-block text-center">
				<script src="http://www.latesttraveloffers.com/public/search/lib/SearchBox.js"></script>
				<script type="text/javascript">PPOSearchBox('detailed','steel','AMT American Express Travel','AXAMTT','Account&ogid=7822','_self');</script>
			</div>

			<h3 class="video_header">See More World Cruise Videos</h3>
			<a href="http://www.amttravel.com/around-the-world-cruises/" class="videoLoader">Around The World Cruises</a>
			<a href="http://www.amttravel.com/cruises-around-the-world/" class="videoLoader">Cruises Around The World</a>
			<a href="http://www.amttravel.com/luxury-world-cruises/" class="videoLoader">Luxury World Cruises</a>
			<a href="http://www.amttravel.com/luxury-world-cruise/" class="videoLoader">Luxury World Cruise</a>
			<a href="http://www.amttravel.com/luxury-world-cruise-package/" class="videoLoader">Luxury World Cruise Packages</a>
			<a href="http://www.amttravel.com/five-star-cruises/" class="videoLoader">5 Star World Cruises</a>
			<a href="http://www.amttravel.com/world-cruise-lines/" class="videoLoader">World Cruise Lines</a>
			<a href="http://www.amttravel.com/world-cruises/" class="videoLoader">World Cruising</a>
			<a href="http://www.amttravel.com/world-travel-cruises/" class="videoLoader">World Travel Cruises</a>

			</div>
		</div><!-- #secondary -->
</div> <!-- .row -->
</div> <!-- .container -->
<?php get_footer(); ?>
