<?php

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');


add_action( 'widgets_init', function(){
     register_widget( 'mobile_wedding_registry_widget' );
});
/**
 * Adds wedding_registry_widget widget.
 */
class mobile_wedding_registry_widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'mobile_wedding_registry_widget', // Base ID
			__('Mobile Wedding Registry Widget', 'travel_insiders'), // Name
			array( 'description' => __( 'List of recent AMT Wedding Registries, in a Boot Strap carousel', 'travel_insiders' ), ) // Args
		);
	}
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
  public function widget( $args, $instance ) {
    $recent_posts = wp_get_recent_posts(array(  'numberposts' => 9,'post_type'=>'wedding_registry', 'orderby' => 'post_date', 'post_status' => 'publish'));
		$i = 0;
echo '
									<div class=" registry-row-mobile">
									<div id="wedding-reg-mobile" class="col-xs-12 col-sm-12 carousel slide" data-ride="carousel">
    								<div class="carousel-inner" role="listbox">';
    foreach( $recent_posts as $recent )
    {
			$spouse_a = get_post_meta( $recent["ID"], 'wedding_registry_field_a', true );
			$spouse_b = get_post_meta( $recent["ID"], 'wedding_registry_field_b', true );
			$i++;
			if($i==1)
			{
					echo  '
								      <div class="item active reg-slide center-block text-center">
											<a href="'.get_permalink( $recent['ID']).'" title="'.$spouse_a.' & '.$spouse_b.'">
												'.get_the_post_thumbnail($recent['ID'],'medium',array('class'=>'center-block text-center')).'
													<div class="mobile-caption text-center"></div>
													<p class="solid-text">'.$spouse_a.'<br/> & <br/>'.$spouse_b.'</p>
												</a>
								      </div>';
			}
			else{
					echo '
			      <div class="item text-center center-block reg-slide">
							<a href="'.get_permalink( $recent['ID']).'" title="'.$spouse_a.' & '.$spouse_b.'">
							<div>'.get_the_post_thumbnail($recent['ID'],'medium-cropped').'</div>
								<div class="mobile-caption text-center"></div>
								<p class="solid-text">'.$spouse_a.'<br/> & <br/>'.$spouse_b.'</p>
							</a>
			      </div>';
					}

			$spouse_a = get_post_meta( $recent["ID"], 'wedding_registry_field_a', true );
			$spouse_b = get_post_meta( $recent["ID"], 'wedding_registry_field_b', true );
			$img_src = wp_get_attachment_image_src( get_post_thumbnail_id($recent['ID']), 'medium-cropped' );
			$thumb_url= $img_src[0];
    }
			echo '</div>
		    <a class="left carousel-control" href="#wedding-reg-mobile" role="button" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#wedding-reg-mobile" role="button" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		      <span class="sr-only">Next</span>
		    </a>
			</div></div>';
  }

}
