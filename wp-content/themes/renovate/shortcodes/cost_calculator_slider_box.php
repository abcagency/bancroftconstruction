<?php
function re_theme_cost_calculator_slider_box_shortcode($atts)
{
	extract(shortcode_atts(array(
		"id" => "slider-box",
		"name" => "slider-box",
		"label" => "",
		"default_value" => "6",
		"unit_value" => "1",
		"step" => "1",
		"min" => "0",
		"max" => "10",
	), $atts));
	
	$output = '<div class="cost-calculator-box clearfix">
		<label>' . $label . '</label>
		<input type="hidden" name="' . esc_attr($name) . '-label" value="' . esc_attr($label) . '">
		<div class="cost-slider-container">
			<input id="' . esc_attr($id) . '" class="cost-slider-input" name="' . esc_attr($name) . '" type="number" value="' . esc_attr($default_value) . '">';
	if(!empty($unit_value))
		$output .= '<input id="' . esc_attr($id) . '-value" type="hidden" value="' . esc_attr($unit_value*$default_value) . '" data-default="' . esc_attr($unit_value*$default_value) . '">';
	$output .= '<div class="cost-slider" data-value="' . esc_attr($default_value) . '" data-step="' . esc_attr($step) . '" data-min="' . esc_attr($min) . '" data-max="' . esc_attr($max) . '" data-input="' . esc_attr($id) . '"' . (!empty($unit_value) ? ' data-value-input=' . esc_attr($id) . '-value data-price=' . esc_attr($unit_value) : '') . '></div>
		</div>
	</div>';
	return $output;
}
add_shortcode("cost_calculator_slider_box", "re_theme_cost_calculator_slider_box_shortcode");
//visual composer
vc_map( array(
	"name" => __("Cost calculator slider box", 'renovate'),
	"base" => "cost_calculator_slider_box",
	"class" => "",
	"controls" => "full",
	"show_settings_on_create" => true,
	"icon" => "icon-wpb-layer-cost-calculator-slider-box",
	"category" => __('Renovate', 'renovate'),
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Id", 'renovate'),
			"param_name" => "id",
			"value" => "slider-box",
			"description" => __("Please provide unique id for each 'Cost calculator slider box' on your page.", 'renovate')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Input name", 'renovate'),
			"param_name" => "name",
			"value" => "slider-box"
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Label", 'renovate'),
			"param_name" => "label",
			"value" => ""
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Default value", 'renovate'),
			"param_name" => "default_value",
			"value" => "6"
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Unit value", 'renovate'),
			"param_name" => "unit_value",
			"value" => "1"
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Step", 'renovate'),
			"param_name" => "step",
			"value" => "1"
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Min value", 'renovate'),
			"param_name" => "min",
			"value" => "0"
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Max value", 'renovate'),
			"param_name" => "max",
			"value" => "10"
		)
	)
));
?>
