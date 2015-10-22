<?php

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');


add_action( 'widgets_init', function(){
     register_widget( 'wedding_registry_widget' );
});
/**
 * Adds wedding_registry_widget widget.
 */
class wedding_registry_widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'wedding_registry_widget', // Base ID
			__('Wedding Registry Widget', 'amtweddings'), // Name
			array( 'description' => __( 'List of recent AMT Wedding Registries', 'amtweddings' ), ) // Args
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
    $recent_posts = wp_get_recent_posts(array(  'numberposts' => 8,'post_type'=>'wedding_registry', 'orderby' => 'post_date', 'post_status' => 'publish'));
		$i = 0;
    foreach( $recent_posts as $recent )
    {
			$i++;
			if($i==1)
			{
					echo'<div class="registry-row clearfix " >';
			}
			$spouse_a = get_post_meta( $recent["ID"], 'wedding_registry_field_a', true );
			$spouse_b = get_post_meta( $recent["ID"], 'wedding_registry_field_b', true );
			$img_src = wp_get_attachment_image_src( get_post_thumbnail_id($recent['ID']), 'medium-cropped' );
			$thumb_url= $img_src[0];
			echo '
			<div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 reg-widg">
				<a href="'.get_permalink( $recent['ID']).'" title="'.$spouse_a.' & '.$spouse_b.'">
							<div class="caption registry-overlay text-center" style="display:none;">
								<span class="icon-heart icom circled-icon"></span><p class="solid-text">'.$spouse_a.'<br/> & <br/>'.$spouse_b.'</p>
							</div>
							<div class="registry-widget-thumbnail center-block">'.get_the_post_thumbnail($recent['ID'],'medium-cropped',array('class'=>'img-responsive center-block reg-thumb')).'</div>
				</a>
				</div>';

		if($i==4)
		{
			echo'</div><div class="registry-row clearfix" >';
		}
		if($i==8)
		{
			echo'</div><div class="clearfix">&nbsp;</div>';
		}
    }
  }
}
