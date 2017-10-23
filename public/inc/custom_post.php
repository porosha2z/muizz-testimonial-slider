<?php
 

/*---------------------------------------------------
 *This custom post for  WEXT Testimonial Slider Plugin
 *---------------------------------------------------*/
function wprong_client_testmonial_slider_post() {
	$labels = array(
			'name'               => __( 'Testimonials', 'wprong' ),
			'singular_name'      => __( 'Testimonial',  'wprong' ),
			'menu_name'          => __( 'Testimonial Slider', 'wprong' ),
			'name_admin_bar'     => __( 'Testimonial Slider',  'wprong' ),
			'add_new'            => __( 'Add New testimonial', 'wprong' ),
			'add_new_item'       => __( 'Add New testimonial', 'wprong' ),
			'new_item'           => __( 'New Testimonial', 'wprong' ),
			'edit_item'          => __( 'Edit Testimonial', 'wprong' ),
			'view_item'          => __( 'View Testimonial', 'wprong' ),
			'all_items'          => __( 'All Testimonial', 'wprong' ),
			'search_items'       => __( 'Search Testimonial', 'wprong' ),
			'parent_item_colon'  => __( 'Parent Testimonial:', 'wprong' ),
			'not_found'          => __( 'No Testimonial found.', 'wprong' ),
			'not_found_in_trash' => __( 'No Testimonial found in Trash.', 'wprong' )
	);

	$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'menu_icon'          => 'dashicons-format-status',
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'testimonial-slide' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor', 'thumbnail')
	);

	register_post_type( 'testimonial_post', $args );
}
add_action( 'init', 'wprong_client_testmonial_slider_post' );
 

 
 
 


  

  
 