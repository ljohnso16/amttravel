<?php
/**
 * amttravelwp functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package amttravelwp
 */

if ( ! function_exists( 'amttravelwp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function amttravelwp_setup() {

	remove_filter ('the_content',  'wpautop');
remove_filter ('comment_text', 'wpautop');
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on amttravelwp, use a find and replace
	 * to change 'amttravelwp' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'amttravelwp', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size( 350, 350);
	add_image_size('small-thumb','250','250',true);
	add_image_size('medium-cropped','400','300',array('center','top'));
	add_image_size('medium','400','300',false);
	add_image_size('large-cropped','640','480',true);
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'amttravelwp' ),
        'secondary' => __( 'Secondary Menu', 'amttravelwp' ),
        'footer-menu' => __( 'Footer Explore Menu', 'amttravelwp' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		//'comment-form',
		//'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	// add_theme_support( 'post-formats', array(
	// 	'aside',
	// 	'image',
	// 	'video',
	// 	'quote',
	// 	'link',
	// ) );

	// Set up the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'amttravelwp_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif; // amttravelwp_setup
add_action( 'after_setup_theme', 'amttravelwp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function amttravelwp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'amttravelwp_content_width', 640 );
}
add_action( 'after_setup_theme', 'amttravelwp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function amttravelwp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'amttravelwp' ),
		'id'            => 'sidebar-1',
		'description'   => '',
	'before_widget' => '<aside id="%1$s" class="text-center center-block widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Sidebar Left', 'amttravelwp' ),
		'id'            => 'footer-left',
		'description'   => '',
		'before_widget' => '<div id="help-text">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Sidebar Right', 'amttravelwp' ),
		'id'            => 'footer-sidebar-right',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Page', 'amttravelwp' ),
		'id'                => 'home-sidebar-area',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '<div style="clear:both"></div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => __( 'Home Page Mobile', 'amttravelwp' ),
		'id'                => 'home-sidebar-area-mobile',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '<div style="clear:both"></div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'amttravelwp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function amttravelwp_scripts() {
	wp_enqueue_style( 'amttravelwp-style-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(),'3.0.3', 'all');
	// wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.4.0', 'all' );
	wp_enqueue_style( 'amttravelwp-style', get_stylesheet_uri() );


	wp_enqueue_script( 'amttravelwp-js-bootstrap', get_template_directory_uri() . '/js/hacked-bootstrap.js', array('jquery'), '3.3.5', true );
wp_enqueue_script( 'amttravelwp-js-bigtext', get_template_directory_uri() . '/js/jquery.fittext.js', array('jquery'), '1.2', true );
wp_enqueue_script( 'amttravelwp-js-bigtext', get_template_directory_uri() . '/js/bigtext.js', array('jquery'), '1.2', true );
	wp_enqueue_script( 'amttravelwp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	// wp_enqueue_script( 'amttravelwp-js-fittext', get_template_directory_uri() . '/js/jquery.fittext.js', array('jquery'), '1.8', true );
wp_enqueue_script( 'amttravelwp-js-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		//wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'amttravelwp_scripts' );
function remove_img_attr ($html) {
    return preg_replace('/(alt|width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );
/**
 * Add Respond.js for IE
 */
if( !function_exists('ie_scripts')) {
	function ie_scripts() {
	 	echo '<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->';
	   	echo ' <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->';
	   	echo ' <!--[if lt IE 9]>';
	    echo ' <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
	    echo ' <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
	   	echo ' <![endif]-->';
   	}
   	add_action('wp_head', 'ie_scripts');
} // end if
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/**
 * Load Bootstrap Menu.
 */
require get_template_directory() . '/inc/bootstrap-walker.php';
/**
 * Load Bootstrap HACKED Menu.
 */
require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
/**
 * Load widgets
 */
require get_template_directory() . '/inc/registry-widget.php';

/**
 * Load widgets
 */
require get_template_directory() . '/inc/mobile-registry-widget.php';
