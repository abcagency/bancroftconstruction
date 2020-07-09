<?php
add_shortcode('WPSM_TEAMPRO','Short_TeamPro');

function Short_TeamPro($Id){
	ob_start();
	if(!isset($Id['id']))
	{
		$wpsm_team_shortcod_pro_id= "";
	}
	else{
		$wpsm_team_shortcod_pro_id = $Id['id'];
	}
	require("content.php");	
	wp_reset_query();
	return ob_get_clean();	
}


?>