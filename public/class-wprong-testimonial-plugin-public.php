<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://porosh.biz
 * @since      1.0.0
 *
 * @package    Wprong_Testimonial_Plugin
 * @subpackage Wprong_Testimonial_Plugin/public
 */
/*-----------------------------------------------------
 *Some predefine Set-up
 *-----------------------------------------------------*/
define('WPRONG_TMSLIDER_WP_PlUGIN', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
	
add_action( 'init', 'wprong_add_new_image_size' );
function wprong_add_new_image_size() {
	add_theme_support('post_thumbnails', '');
	add_image_size( 'wp_small', 80, 80, true ); //mobile
}


/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wprong_Testimonial_Plugin
 * @subpackage Wprong_Testimonial_Plugin/public
 * @author     Porosh Ahammed <porosh.ahammed@gmail.com>
 */
class Wprong_Testimonial_Plugin_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	

	
	
	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wprong_Testimonial_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wprong_Testimonial_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( 'dashicons' );
		wp_enqueue_style( 'bxslider_css', WPRONG_TMSLIDER_WP_PlUGIN . 'css/jquery.bxslider.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name, WPRONG_TMSLIDER_WP_PlUGIN . 'css/wprong-testimonial-plugin-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wprong_Testimonial_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wprong_Testimonial_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		
		
		/**-----------------------------------------------------
		 *Latest Jquery For WPRONG Testimonial Slider Plugin.
		 *------------------------------------------------------*/
		
		 
			wp_enqueue_script( 'jquery' );
	 
		
		
		/*------------------------------------------------------------
		 * Main Jquery and Style for WPRONG Testimonial Slider  Plugin
		 *------------------------------------------------------------*/		
		
 
		wp_enqueue_script( 'bxslider_js', WPRONG_TMSLIDER_WP_PlUGIN . 'js/jquery.bxslider.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name, WPRONG_TMSLIDER_WP_PlUGIN . 'js/wprong-testimonial-plugin-public.js', array( 'jquery' ), $this->version, false );

	}
	
	
	 
	 
 
}





		/**
		 * The class responsible for defining all actions that occur metabox in the public-facing
		 * side of the site.
		 */
	
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/inc/custom_post.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/inc/short_code.php';				
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/inc/shortcode-tinymce-button.php';				
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/settings/wprong_setting_style.php';
 		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/cmb2/init.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/cmb2/functions.php';