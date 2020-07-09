<?php
function re_theme_cost_calculator_input_box_shortcode($atts)
{
	extract(shortcode_atts(array(
		"id" => "input-box",
		"name" => "input-box",
		"label" => "",
		"default_value" => "",
		"type" => "text",
		"checked" => "1",
		"placeholder" => ""
	), $atts));
	
	$output = '<div class="cost-calculator-box clearfix">
		<label>' . $label . '</label>
		<input type="hidden" name="' . esc_attr($name) . '-label" value="' . esc_attr($label) . '">
		<input id="' . esc_attr($id) . '" class="cost-slider-input big type-' . esc_attr($type) . '" name="' . esc_attr($name) . '" type="' . esc_attr($type) . '"' . ($type=="checkbox" && (int)$checked ? ' checked="checked"' : '') . ' value="' . ($type=="checkbox" && !(int)$checked ? 0 : esc_attr($default_value)) . '" data-value="' . esc_attr($default_value) . '" placeholder="' . esc_attr($placeholder) . '">
		' . ($type=="checkbox" ? '<label class="checkbox-label template-bullet" for="' . esc_attr($id) . '"></label>' : '') . '
	</div>';
	return $output;
}
add_shortcode("cost_calculator_input_box", "re_theme_cost_calculator_input_box_shortcode");
//visual composer
vc_map( array(
	"name" => __("Cost calculator input box", 'renovate'),
	"base" => "cost_calculator_input_box",
	"class" => "",
	"controls" => "full",
	"show_settings_on_create" => true,
	"icon" => "icon-wpb-layer-cost-calculator-input-box",
	"category" => __('Renovate', 'renovate'),
	"params" => array(
		array(
			"type" => "textfield",
			"holder" => "div",
			"class" => "",
			"heading" => __("Id", 'renovate'),
			"param_name" => "id",
			"value" => "input-box",
			"description" => __("Please provide unique id for each 'Cost calculator input box' on your page.", 'renovate')
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Input name", 'renovate'),
			"param_name" => "name",
			"value" => "input-box"
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
			"value" => ""
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Type", 'renovate'),
			"param_name" => "type",
			"value" => array(__("text", 'renovate') => "text", __("number", 'renovate') => "number", __("email", 'renovate') => "email", __("checkbox", 'renovate') => "checkbox")
		),
		array(
			"type" => "dropdown",
			"class" => "",
			"heading" => __("Is checked", 'renovate'),
			"param_name" => "checked",
			"value" => array(__("yes", 'renovate') => "1", __("no", 'renovate') => "0"),
			"dependency" => Array('element' => "type", 'value' => "checkbox")
		),
		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Placeholder", 'renovate'),
			"param_name" => "placeholder",
			"value" => ""
		)
	)
));
?>
