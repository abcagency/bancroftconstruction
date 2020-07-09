<?php
//comments component
function re_theme_comments($atts, $content)
{
	extract(shortcode_atts(array(
		"show_comments_form" => 1,
		"show_comments_list" => 1,
		"top_margin" => "none"
	), $atts));
	
	$output = "";
	if((int)$show_comments_form)
	{
		ob_start();
		require_once(locate_template("comments-form.php"));
		$output .= ob_get_contents();
		ob_end_clean();
	}
	if((int)$show_comments_list)
	{
		$output .= '<div class="comments-list-container clearfix' . ($top_margin!='none' ? ' ' . $top_margin : '') . '">';
		ob_start();
		comments_template();
		$output .= ob_get_contents();
		ob_end_clean();
		$output .= '</div>';
	}
	return $output;
}
add_shortcode("comments", "re_theme_comments");

//visual composer
function re_theme_comments_vc_init()
{
	//image sizes
	$image_sizes_array = array();
	$image_sizes_array[__("Default", 'renovate')] = "default";
	global $_wp_additional_image_sizes;
	foreach(get_intermediate_image_sizes() as $s) 
	{
		if(isset($_wp_additional_image_sizes[$s])) 
		{
			$width = intval($_wp_additional_image_sizes[$s]['width']);
			$height = intval($_wp_additional_image_sizes[$s]['height']);
		} 
		else
		{
			$width = get_option($s.'_size_w');
			$height = get_option($s.'_size_h');
		}
		$image_sizes_array[$s . " (" . $width . "x" . $height . ")"] = "re_" . $s;
	}
	vc_map( array(
		"name" => __("Comments", 'renovate'),
		"base" => "comments",
		"class" => "",
		"controls" => "full",
		"show_settings_on_create" => true,
		"icon" => "icon-wpb-layer-comments",
		"category" => __('Renovate', 'renovate'),
		"params" => array(
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => __("Show comments form", 'renovate'),
				"param_name" => "show_comments_form",
				"value" => array(__("Yes", 'renovate') => 1, __("No", 'renovate') => 0)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => __("Show comments list", 'renovate'),
				"param_name" => "show_comments_list",
				"value" => array(__("Yes", 'renovate') => 1, __("No", 'renovate') => 0)
			),
			array(
				"type" => "dropdown",
				"class" => "",
				"heading" => __("Top margin", 'renovate'),
				"param_name" => "top_margin",
				"value" => array(__("None", 'renovate') => "none", __("Page (small)", 'renovate') => "page-margin-top", __("Section (large)", 'renovate') => "page-margin-top-section")
			)
		)
	));
}
add_action("init", "re_theme_comments_vc_init");