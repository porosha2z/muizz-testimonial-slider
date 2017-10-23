<?php
require_once dirname( __FILE__ ) . '/class.wprong_testimonials.php';
/**
 * Theme Admin panel for Tareq's Planet
 *
 * @author Tareq Hasan
 */
class WProng_testimonial {

    private $settings_api;

    function __construct() {
        $this->settings_api = new Wprong_Settings_API();

        add_action( 'admin_init', array($this, 'admin_init') );
        add_action( 'admin_menu', array($this, 'admin_menu') );
    }

    function admin_init() {

        //set the settings
        $this->settings_api->set_sections( $this->get_settings_sections() );
        $this->settings_api->set_fields( $this->get_settings_fields() );

        //initialize settings
        $this->settings_api->admin_init();
    }

    function admin_menu() {
        add_submenu_page( 'edit.php?post_type=testimonial_post', 'Theme Options', 'Testimonial Settings', 'manage_options','theme-option', array( $this, 'plugin_page' ) );
    }

    function get_settings_sections() {
        $sections = array(
            array(
                'id' => 'wprong_general_settings',
                'title' => __( 'General Settings', 'wprong' ),
            	 
            ),
            array(
                'id' => 'wprong_style_settings',
                'title' => __( 'Style Settings', 'wprong' )
            ),
        );
        return $sections;
    }

    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    function get_settings_fields() {
        $settings_fields = array(
            'wprong_general_settings' => array(               
                array(
                    'name'    => 'wprong_tmslider_auto_slideshow',
                    'label'   => __( 'Auto slideshow', 'wprong' ),
                    'desc'    => __( 'Animate slider automatically. Default Yes ', 'wprong' ),
                    'type'    => 'radio',
                    'default' => 'true',
                    'options' => array(
                        'true' => 'Yes',
                        'false'  => 'No'
                    )
                ),
                array(
                    'name' => 'wprong_tmslider_slider_slideshowSpeed',
                    'label' => __( 'Slide show speed', 'wprong' ),
                    'desc' => __( 'Set sliding speed in milliseconds. Default value 5000.', 'wprong' ),
                    'type' => 'number',
                    'default' => '5000'
                )
              
               
              
            		
            ),
        		
            'wprong_style_settings' => array(
                   array(
                    'name'    => 'wprong_tmslider_slider_bg_color',
                    'label'   => __( 'Slider background color ', 'wprong' ),
                    'desc'    => __( 'Select a color for slider background color. Default #606060', 'wprong' ),
                    'type'    => 'color',
                    'default' => '#606060'
                ),
                array(
                    'name'    => 'wprong_tmslider_slider_font_color',
                    'label'   => __( 'Testimonial font color', 'wprong' ),
                    'desc'    => __( 'Select a color for Testimonial font color. Default #FFFFFF', 'wprong' ),
                    'type'    => 'color',
                    'default' => '#FFFFFF'
                ),
                array(
                    'name' => 'wprong_tmslider_slider_font_size',
                    'label' => __( 'Testimonial font size', 'wexteam' ),
                    'desc' => __( 'Set the Testimonial font size in pixel. For best result use 12 to 20 pixel. Default value 14.', 'wprong' ),
                    'type' => 'number',
                    'default' => '14px',
                	'size'  => 'small'	
                ),
               
                array(
                    'name'    => 'wprong_tmslider_slider_font_font_family',
                    'label'   => __( 'Testimonial font family ', 'wprong' ),
                    'desc'    => __( 'Add the font family name which font linked from google fonts . Default Indie Flower', 'wprong' ),
                    'type'    => 'text',
                    'default' => 'Indie Flower',
                	'size'    => 'medium'
                ),
                array(
                    'name'    => 'wprong_tmslider_slider_font_font_style',
                    'label'   => __( 'Testimonial font style', 'wprong' ),
                    'desc'    => __( 'Select the testimonial font style from Normal adn Italic. Default Italic ', 'wprong' ),
                    'type'    => 'radio',
                    'default' => 'italic',
                    'options' => array(
                        'normal' => 'Normal',
                        'italic'  => 'Italic'
                    )
                ),
                array(
                    'name'    => 'wprong_tmslider_slider_footer_color',
                    'label'   => __( 'Navigation button background color', 'wprong' ),
                    'desc'    => __( 'Select a color for navigation arrow background. Default #000000', 'wprong' ),
                    'type'    => 'color',
                    'default' => '#000000'
                ),
            	array(
            		'name'    => 'wprong_tmslider_slider_arrow_color',
            		'label'   => __( 'Navigation arrow color', 'wprong' ),
            		'desc'    => __( 'Select a color for navigation arrow. Default #ffffff', 'wprong' ),
            		'type'    => 'color',
            		'default' => '#ffffff'
            		),
            		array(
            				'name'    => 'wprong_tmslider_navigation_bar_position',
            				'label'   => __( 'Navigation bar position', 'wprong' ),
            				'desc'    => __( 'Select navigation bar position. Default Right.', 'wprong' ),
            				'default' => 'right',
            				'type'    => 'radio',
            				'options' => array(
            						'left' => 'Left',
            						'right'   => 'Right'
            				)
            		),
            	 
                array(
                    'name'    => 'wprong_tmslider_image_border_color',
                    'label'   => __( 'Client image border color ', 'wprong' ),
                    'desc'    => __( 'Select a color for client image border. Default #737373', 'wprong' ),
                    'type'    => 'color',
                    'default' => '#737373'
                ),
                array(
                    'name'    => 'wprong_tmslider_client_image_style',
                    'label'   => __( 'Client image style', 'wprong' ),
                    'desc'    => __( 'Select a style from Round and Square for client image. Default Square.', 'wprong' ),
                    'default' => '50%',
                    'type'    => 'radio',
                    'options' => array(
                        '50%' => 'Round',
                        '0'   => 'Square'
                    )
                ),
                array(
                    'name'    => 'wprong_tmslider_client_name_font_color',
                    'label'   => __( 'Client name font color', 'wprong' ),
                    'desc'    => __( 'Select a color for client name. Default #FFFFFF', 'wprong' ),
                    'type'    => 'color',
                    'default' => '#FFFFFF'
                ),
                array(
                    'name'    => 'wprong_tmslider_client_company_font_color',
                    'label'   => __( 'Client position and company font color', 'wprong' ),
                    'desc'    => __( 'Select a color for client position and company name. Default #ffffff', 'wprong' ),
                    'type'    => 'color',
                    'default' => '#ffffff'
                ),
              
              
                
              
              
            )
        );

        return $settings_fields;
    }

    function plugin_page() {
        echo '<div class="wrap">';
        settings_errors();

        $this->settings_api->show_navigation();
        $this->settings_api->show_forms();

        echo '</div>';
    }

}

$settings = new WProng_testimonial();
