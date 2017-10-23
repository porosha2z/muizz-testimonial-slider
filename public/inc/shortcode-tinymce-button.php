<?php 
/*---------------------------------------------------------
 * Shortcode button for wext testimonial slider
 *----------------------------------------------------------*/
function wprong_tmslider_buttons() {
	add_filter ("mce_external_plugins", "wprong_tslider_external_js");
	add_filter ("mce_buttons", "wprong_tslider_awesome_buttons");
}

function wprong_tslider_external_js($plugin_array) {
	$plugin_array['wprong_tmslider'] = plugins_url('../js/shortcode-tinymce-button.js', __FILE__);
	return $plugin_array;
}

function wprong_tslider_awesome_buttons($buttons) {
	array_push ($buttons, 'wprong_tmslider');
	return $buttons;
}
add_action ('init', 'wprong_tmslider_buttons');