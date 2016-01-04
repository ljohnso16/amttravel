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

?>

		<div id="secondary" class="center-block col-xs-12 col-sm-12 col-md-3 col-lg-3 text-center block-center" role="complementary">
			<h3>Package Quotes</h3>
			<a href="http://www.globustravelagent.com/Vacation-Packages/?id=4376" class="side-buttons text-center">Globus</a>
			<a href="http://www.pleasantholidays.com/PleasantHolidaysWeb/PartnerLinkCmd.do?Partner_PartnerOID=partnerCode__.__8403__..__webSerialNumber__.__1501" class="side-buttons text-center">Pleasant Holidays</a>
			<a href="http://www.funjet.com/default.aspx?OAC=IND&plCode=05919082" class="side-buttons text-center">FunJet</a>
			<a href="http://crusader.travimp.com/TIDirect/TIDirectFrontServlet?request_type=hotelsearch&TIConnectId=05919082&prefDep=LAX&destCode=AUA&hotelCode=AAI" class="side-buttons text-center">American Express</a>
			<div style="width:188px; margin:10px;background-color: rgb(211, 211, 211);" class="center-block text-center">
				<script src="http://www.latesttraveloffers.com/public/search/lib/SearchBox.js"></script>
				<script type="text/javascript">PPOSearchBox('detailed','steel','AMT American Express Travel','AXAMTT','Account&ogid=7822','_self');</script>
			</div>
			<div class="text-center center-block">
				<h3>Be Social</h3>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=124029244364642";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<p>
					<div class="fb-share-button" data-href="<?php get_permalink(); ?>" data-layout="button"></div>
				</p>
				<a href="https://twitter.com/share" class="twitter-share-button"{count} data-url="<?php get_permalink(); ?>">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				<h3>Recent Posts</h3>

<ul class="pull-left recent-posts">
				<?php $args = array(
				    'numberposts' => 5,
				    'offset' => 0,
				    'category' => 0,
				    'orderby' => 'post_date',
				    'order' => 'DESC',
				    'post_type' => 'post',
				    'post_status' => 'publish',
				    'suppress_filters' => true );

				    $recent_posts = wp_get_recent_posts( $args, true );

						foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';}
				?>
</ul>
			</div>

		</div><!-- #secondary -->
	</div> <!-- .row -->
</div> <!-- .container -->
