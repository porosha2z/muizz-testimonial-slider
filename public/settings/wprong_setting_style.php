<?php
require_once dirname( __FILE__ ) . '/settings_api.php';
 

 

/*-----------------------------------------------------
 * trigger setting api class
 *-----------------------------------------------------*/
function wprong_tmslider_get_option( $option, $section, $default = '' ) {

	$options = get_option( $section );

	if ( isset( $options[$option] ) ) {
		return $options[$option];
	}

	return $default;
}


function wprong_tmslider_style_for_setting_options(){
	?>
<style type="text/css">
	
	.bx-wrapper .bx-viewport{
		background:<?php echo wprong_tmslider_get_option( 'wprong_tmslider_slider_bg_color', 'wprong_style_settings', '#39393C' );?>;
	}
	.wpr_tes_con{
		color:<?php echo wprong_tmslider_get_option( 'wprong_tmslider_slider_font_color', 'wprong_style_settings', '#FFFFFF' );?>;
		font-size:<?php echo wprong_tmslider_get_option( 'wprong_tmslider_slider_font_size', 'wprong_style_settings', '14' );?>px;
		font-style:<?php echo wprong_tmslider_get_option( 'wprong_tmslider_slider_font_font_style', 'wprong_style_settings', 'italic' );?>;
		font-family: <?php echo wprong_tmslider_get_option( 'wprong_tmslider_slider_font_font_family', 'wprong_style_settings', 'Indie Flower' );?>;
	}
	.bx-wrapper .bx-controls-direction a {
		background:<?php echo wprong_tmslider_get_option( 'wprong_tmslider_slider_footer_color', 'wprong_style_settings', '#000000' );?>;
 	}
	.bx-wrapper .bx-prev:before,.bx-wrapper .bx-prev:after,.bx-wrapper .bx-next:before, .bx-wrapper .bx-next:after{
		background-color:<?php echo wprong_tmslider_get_option( 'wprong_tmslider_slider_arrow_color', 'wprong_style_settings', '#ffffff' );?> ;
 	}
	.con_img {
	  border-color: <?php echo wprong_tmslider_get_option( 'wprong_tmslider_image_border_color', 'wprong_style_settings', '#737373' );?>;
	  border-radius: <?php echo wprong_tmslider_get_option( 'wprong_tmslider_client_image_style', 'wprong_style_settings', '0' );?>;
	 
	}
	.desig strong{
		color:<?php echo wprong_tmslider_get_option( 'wprong_tmslider_client_name_font_color', 'wprong_style_settings', '#ffffff' );?>;
 
	}
	.desig span{
		color:<?php echo wprong_tmslider_get_option( 'wprong_tmslider_client_company_font_color', 'wprong_style_settings', '#FFFFFF' );?>;
	}
	.bx-controls-direction {
		<?php echo wprong_tmslider_get_option( 'wprong_tmslider_navigation_bar_position', 'wprong_style_settings', '#6b6b70' );?>: 4px;
	}	 
	 
		
</style>
<?php
}
add_action('wp_head','wprong_tmslider_style_for_setting_options');


/*---------------------------------------------------
 * Add script in footer for settings options
 *---------------------------------------------------*/
function wprong_tmslider_script_for_setting_options(){
	?>
<script>
jQuery.noConflict();
(function( $ ) {
  $(function() {


$(document).ready(function($){


	 $('.bxslider').bxSlider({
		  adaptiveHeight: true,
		  auto: <?php echo wprong_tmslider_get_option( 'wprong_tmslider_auto_slideshow', 'wprong_general_settings', 'true' );?>,
		  pager: false,
		  speed: <?php echo wprong_tmslider_get_option( 'wprong_tmslider_slider_slideshowSpeed', 'wprong_general_settings', 5000 );?>,
		  
		    
		 
	  });
  

	 
});


});
})(jQuery);
</script>
<?php
}
add_action('wp_footer', 'wprong_tmslider_script_for_setting_options');


