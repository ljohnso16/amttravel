<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amttravelwp
 */

?><!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header">
	<nav id="primary-menu">
		<div class="primenav navbar navbar-static-top navbar-default navbar-fixed-top">
				<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
				<div class="navbar-header">
					<button type="button" class="pull-left navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="navbar-collapse collapse navbar-responsive-collapse">
					<?php
					wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'primary',
							'depth'             => 3,
							'container'         => '',
							'container_class'   => '',
							'menu_class'        => 'nav navbar-nav navbar-left',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
					);

					?>
<div class="pull-right" id="call-phonenumber">
	call 800-999-2599
</div>
				</div>
		</div>
	</nav>
<div class="sol-container" >
	<div class="sol-header-overlay text-center">
						<div id="header-overlay-text" class="text-center ">Travel</div>
						<div id="header-overlay-text2" class="text-center ">Insiders</div>
					<div class="header-phone"><hr class="header-phone-bars"/><div class="phone-text">800.999.2599</div><hr class="header-phone-bars"/></div>
					<!-- <div class="text-center header-social-icons"><a href="https://www.facebook.com/Travelinsiders"><span class="icon-facebook2"></span></a><a href="https://twitter.com/AMT_Travel"><span class="icon-twitter2"></span></a><span class=" icon-google-plus2"></span></div> -->
				<div class="amex-header-logo text-center"><img src="<?php echo get_template_directory_uri();?>/img/AMT-AmexLogo-min.png" alt="Header Logo" class="header-logo"></div>
</div>
<div id="topslider" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active" id="item-1">
		<img src="<?php echo get_template_directory_uri();?>/img/header.jpg" alt="slide">
    </div>

    <div class="item" id="item-2">
		<img src="<?php echo get_template_directory_uri();?>/img/header2.jpg" alt="slide">
    </div>

    <div class="item" id="item-3">
		<img src="<?php echo get_template_directory_uri();?>/img/header3.jpg" alt="slide">
    </div>


  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#topslider" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#topslider" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>





</div>
</div>

	<nav>
		<div class="secondary-navbar navbar navbar-static-top navbar-default">
				<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
				<div class="navbar-header"></div>

				<div class="seconnd-nav navbar-collapse collapse navbar-responsive-collapse">
					<?php

					$args = array(
						'theme_location' => 'secondary',
						'depth'      => 3,
						'container'  => false,
						'menu_class'     => 'nav navbar-nav navbar-center',
						'walker'     => new Bootstrap_Walker_Nav_Menu()
						);

					if (has_nav_menu('secondary')) {
						wp_nav_menu($args);
					}

					?>

				</div>
		</div>
	</nav>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
