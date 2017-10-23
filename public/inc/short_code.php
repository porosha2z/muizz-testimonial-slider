<?php 
//element shortcode csnovaachordion pane [wprong_testimonial]


function wprong_testimonial_shortcode($atts,$content){
	extract(shortcode_atts(array(
		 	
	),$atts, 'wprong_testimonial'));
	//post type
	$testimonial = new WP_Query(array(
			'post_status'   => 'publish',
			'post_type' => 'testimonial_post',			 
			'posts_per_page' => -1
 
	
	));

	 
	
$list .='<div class="wprong_tmslider">
		 <div class="bxslider">';
      
      
          if($testimonial->have_posts()) : 
          while($testimonial->have_posts()) : $testimonial->the_post();	 
          
            
               global $post;
               $dd = get_the_ID();
               $cc = get_the_content( $dd ); 
               $thumb = get_the_post_thumbnail( $dd );
                $testimonial_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'wp_small' );
                $img_id = get_post_thumbnail_id( $dd );
                $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
                $client_designation = get_post_meta($dd , 'testimonial_designation', true);
                $client_company = get_post_meta($dd , 'testimonial_company', true);
                
               
              
               
       $list .='<div class="item">
               <div class="wpr_tes_con">
                    '.get_the_content().'
               </div>
               <div class="testimage">
                   
                     <div class="con_img">
                        <img src="'.$testimonial_url[0].'"/>	
                     </div>
                     <div class="border_horiz"></div>
                     <div class="desig">
                        <strong>
                        -  '.get_the_title().'
                        </strong> <br> 
                        <span class="designation">  '.$client_designation.' ,</span><span class="company">   '.$client_company.' </span>	
                     </div>
               
               </div>
            </div>';
            
             endwhile;  
             endif; 
            
  $list .='</div>
     </div>';
     
     return $list;


		
 	 	 
	 
}
add_shortcode('wprong_testimonial','wprong_testimonial_shortcode');
