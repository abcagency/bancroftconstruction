<?php
add_shortcode('TESTIMONIAL_PRO','Short_TestiboxPro');

function Short_TestiboxPro($Id){
	ob_start();
	if(!isset($Id['id']))
	{
		$testimonial_pro_id= "";
	}
	else{
		$testimonial_pro_id = $Id['id'];
	}
	require("content.php");	
	wp_reset_query();
	return ob_get_clean();	
}


?>